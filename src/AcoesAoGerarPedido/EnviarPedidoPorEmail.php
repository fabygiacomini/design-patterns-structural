<?php


namespace DesignPatterns\Structural\AcoesAoGerarPedido;


use DesignPatterns\Structural\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado." . PHP_EOL;
    }
}