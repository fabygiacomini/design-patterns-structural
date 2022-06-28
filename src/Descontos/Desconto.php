<?php


namespace DesignPatterns\Structural\Descontos;

use DesignPatterns\Structural\Orcamento;


abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}