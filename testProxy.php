<?php

require 'vendor/autoload.php';

use DesignPatterns\Structural\ItemOrcamento;
use DesignPatterns\Structural\Orcamento;
use DesignPatterns\Structural\CacheOrcamentoProxy;

$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 150;
$orcamentoAntigo->addItem($item3);

$orcamentoMaisAntigoAinda = new Orcamento();
$item4 = new ItemOrcamento();
$item4->valor = 50;
$item5 = new ItemOrcamento();
$item5->valor = 100;
$orcamentoMaisAntigoAinda->addItem($item4);
$orcamentoMaisAntigoAinda->addItem($item5);

$orcamentoAntigo->addItem($orcamentoMaisAntigoAinda);

$orcamento->addItem($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);

echo $orcamento->valor();
echo $orcamento->valor(); // valor já foi cacheado e retornará mais rápido

/**
 * Proxy Pattern é como um substituto do objeto original (neste contexto o Orçamento),
 * mas que não só o substitui como também contém o objeto original. Este padrão permite
 * que executemos algo antes ou depois da chamada do método da classe original.
 * Neste exemplo, estamos validando, antes de pegar o valor do orçamento (que supostamente está
 * sendo buscado de uma api), verificando se essa consulta já foi realizada anteriormente, e retornando
 * o valor salvo em cache, devolvendo o valor muito mais rápido do que se fosse consultado repetidas
 * vezes. Caso não tenhamos o valor original em cache, aí sim o proxy permite a consulta na api.
 *
 * A diferença do Proxy para o Decorator é a intenção.
 * O proxy tem por intenção interceptar a execução do método para executar alguma ação.
 * Enquanto que o Decorator tem a intenção de adicionar novas funcionalidades.
 */