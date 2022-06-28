<?php

namespace DesignPatterns\Structural\AcoesAoGerarPedido;

use DesignPatterns\Structural\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}