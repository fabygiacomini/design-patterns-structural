<?php

require 'vendor/autoload.php';

use DesignPatterns\Structural\CalculadoraDeImpostos;
use DesignPatterns\Structural\Orcamento;
use DesignPatterns\Structural\Impostos\ISS;
use DesignPatterns\Structural\Impostos\ICMS;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new ISS(new ICMS()));


/**
 * Decorator Pattern pode ser usado para permitir que uma classe contenha outra (mas não obrigatória),
 * incrementando uma classe ao adicionar a ela, outra classe; no exemplo, um imposto contendo outro imposto.
 * Adicionando funcionalidade existente a outra funcionalidade, sem precisar criar classes novas e sem
 * modificar código, por exemplo, sem precisar criar uma classe `ISSComICMS`, e ir criando infinitas
 * classes de combinação entre os impostos; mas sim combinando-os em tempo de execução.
 */