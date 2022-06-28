<?php


namespace DesignPatterns\Structural\Descontos;

use DesignPatterns\Structural\Orcamento;


class SemDesconto extends Desconto
{
    public function __construct(?Desconto $proximoDesconto)
    {
        parent::__construct($proximoDesconto);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}