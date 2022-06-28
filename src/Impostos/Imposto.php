<?php

namespace DesignPatterns\Structural\Impostos;

use DesignPatterns\Structural\Orcamento;

interface Imposto
{
    // Strategy Pattern
    public function calculaImposto(Orcamento $orcamento): float;
}