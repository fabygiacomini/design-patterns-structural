<?php


namespace DesignPatterns\Structural;


class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        // biblioteca de logs
        echo "Salvando log de desconto: $descontoCalculado";
    }
}