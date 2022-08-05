<?php

require 'vendor/autoload.php';

use DesignPatterns\Structural\CalculadoraDeDescontos;
use DesignPatterns\Structural\Orcamento;

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 3;

$calculadoraDescontos = new CalculadoraDeDescontos();
$calculadoraDescontos->calculaDescontos($orcamento); // log será disparado

/**
 * Facade Pattern pode ser usado quando queremos encapsular alguma complexidade e fornecer
 * para uso uma interface simples. por exemplo, neste caso, temos uma classe com toda a
 * complexidade de gravar um log, liberando para o usuário apenas o método que precisará
 * para inicia a gravação de log, ocultando toda a complexidade de como faze-lo, e liberando
 * apenas a funcionalidade em si.
 */
