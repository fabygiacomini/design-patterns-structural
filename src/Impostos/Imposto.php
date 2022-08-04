<?php

namespace DesignPatterns\Structural\Impostos;

use DesignPatterns\Structural\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;
    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    // Strategy Pattern
    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento)
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoDeOutroImposto($orcamento);
    }

    // Decorator Pattern
    public function realizaCalculoDeOutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}