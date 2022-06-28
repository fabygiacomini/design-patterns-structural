<?php

namespace DesignPatterns\Structural;

use DesignPatterns\Structural\EstadosOrcamento\EmAprovacao;
use DesignPatterns\Structural\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    /**
     * @throws \DomainException
     */
    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}