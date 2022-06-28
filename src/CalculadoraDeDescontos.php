<?php

namespace DesignPatterns\Structural;

use DesignPatterns\Behavioral\Descontos\DescontoMaisDe500Reais;
use DesignPatterns\Behavioral\Descontos\DescontoMaisDe5Itens;
use DesignPatterns\Behavioral\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    // Chain of Responsibility Patter
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto(null)
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}