<?php

namespace DesignPatterns\Structural\EstadosOrcamento;

use DesignPatterns\Structural\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw  new \DomainException(
            'Orçamentos finalizados não podem receber descontos extras'
        );
    }
}