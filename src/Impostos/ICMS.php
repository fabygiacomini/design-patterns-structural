<?php

namespace DesignPatterns\Structural\Impostos;

use DesignPatterns\Structural\Orcamento;

class ICMS extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}