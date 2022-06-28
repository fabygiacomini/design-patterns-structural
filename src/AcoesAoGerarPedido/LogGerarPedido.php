<?php


namespace DesignPatterns\Structural\AcoesAoGerarPedido;


use DesignPatterns\Structural\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de criação de pedido" . PHP_EOL;
    }
}