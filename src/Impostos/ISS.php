<?php

namespace DesignPatterns\Structural\Impostos;

use DesignPatterns\Structural\Orcamento;

class ISS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}