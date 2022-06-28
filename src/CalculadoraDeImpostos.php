<?php

namespace DesignPatterns\Structural;

use DesignPatterns\Structural\Impostos\Imposto;

class CalculadoraDeImpostos
{
    // Strategy Pattern
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}