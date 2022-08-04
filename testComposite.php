<?php

require 'vendor/autoload.php';

use DesignPatterns\Structural\ItemOrcamento;
use DesignPatterns\Structural\Orcamento;

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

echo $orcamento->valor();


/**
 * Composite Pattern.
 * Podemos usar esse pattern para montar uma árvore de itens. Neste caso, temos uma árvore de itens e
 * orçamentos, sendo que dentro de um orçamento, podemos ter outros, que terá outro, etc... podendo compor
 * orçamentos que tenham outros orçamentos (galhos), e folhas (itens específicos) que podem ser acessados
 * de forma similar (neste exemplo, método `valor()`).
 */