<?php

namespace DesignPatterns\Structural\EstadosOrcamento;

use DesignPatterns\Structural\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw  new \DomainException(
            'Orçamentos reprovados não podem receber descontos extras'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}