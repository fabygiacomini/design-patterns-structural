<?php

require 'vendor/autoload.php';

use DesignPatterns\Structural\{Orcamento, Pedido};
use DesignPatterns\Structural\Relatorio\{OrcamentoExportado, PedidoExportado};
use DesignPatterns\Structural\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;


$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
//$orcamentoExportadoZip = new ArquivoZipExportado('orcamento.array');
//echo $orcamentoExportadoZip->salvar($orcamentoExportado);

echo $orcamentoExportadoXml->salvar($orcamentoExportado);


/**
 * Com o pattern Bridge, conseguimos fazer a "ponte" entre os dados gerados para exportação
 * e a geração, de fato, do arquivo.
 * Sem precisar ter que implementar uma exportação em xml para orçamento, outra para zip de orçamento,
 * mais uma para xml de pedido, outra de zip para pedido... quanto mais tipos de arquivos e mais dados
 * de relatórios necessários, aumentando muito a quantidade de classes, e deixando o sistema não escalável.
 * Criando classes que exportam dados (OrcamentoExportado), ela já deixa pronto os dados para qualquer tipo
 * de arquivo que se mostrar necessário. E as classes que de fato transformam os dados em arquivo (ArquivoXmlExportado)
 * implementa apenas uma vez a transformação desses dados em arquivo, podendo ser reutilizada para diversos
 * tipos de relatórios (orçamento, pedidos, etc).
 * Como uma "ponte" entre o ConteudoExportado e o ArquivoExportado (ambas interfaces).
 */