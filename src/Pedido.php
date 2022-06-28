<?php


namespace DesignPatterns\Structural;


class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;

}