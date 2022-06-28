<?php


namespace DesignPatterns\Structural\AcoesAoGerarPedido;


use DesignPatterns\Structural\Pedido;

// ObserverPattern
interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido);
}