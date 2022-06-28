<?php

namespace DesignPatterns\Structural\Impostos;

use DesignPatterns\Structural\Orcamento;

class ICMS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}