<?php

namespace DesignPatterns\Structural\EstadosOrcamento;

use DesignPatterns\Structural\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}