<?php

namespace DesignPatterns\Structural\Relatorio;

use DesignPatterns\Structural\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidadeDeItens' => $this->orcamento->quantidadeItens
        ];
    }
}