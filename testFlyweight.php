<?php

require 'vendor/autoload.php';

use DesignPatterns\Structural\Orcamento;
use DesignPatterns\Structural\Pedido;
use DesignPatterns\Structural\DadosExtrinsecosPedido;

$pedidos = [];
$dados = new DadosExtrinsecosPedido(new \DateTimeImmutable(), md5((string) rand(1, 100000)));

for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->orcamento = new Orcamento();
    $pedido->dadosExtrinsecosPedido = $dados;

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage(); // quanto de memória está sendo usada


/**
 * Flyweight Pattern - otimizar o uso da memória RAM separando parte de um onjeto que podem ser
 * externalizadas de partes que necessitam ser internas ao objeto. Neste exemplo, data de criação
 * do pedido e nome do cliente são dados extrínsecos ao pedido em si, ou seja, podem ser externalizados,
 * pois podem repetir, podem ser compartilhados, por exemplo. Já o orçamento é um dado intrínseco ao pedido,
 * ou seja, é único do pedido em questão. Observação: os dados externalizados precisam ser imutáveis, senão a mudança
 * deles afetará todos os outros (pedidos).
 * Assim, a não necessidade de instanciar todas as vezes um novo datetime, e nem gerar o nome do cliente
 * (fazendo apenas uma vez fora do `for`) reduziu o consumo de memória para executar o bloco em mais da metade.
 * No entanto, só deve ser usado quando precisamos poupar muito memória, pois as classes de dados extrínsecos podem
 * acabar com nomes genéricos e pouco sugestidos, e, no caso do PHP, dificilmente teremos muitos objetos carregados
 * memória ao mesmo tempo, por causa da sua execução ter um período relativamente curto - tempo de requisição; e
 * podemos utilizar outros padrões para suprir algumas das necessidades deste, como o proxy de cache, por exemplo.
 */