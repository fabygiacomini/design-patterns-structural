<?php


namespace DesignPatterns\Structural\Relatorio;


interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}