<?php

require_once 'vendor/autoload.php';

use DesignPatterns\Structural\RegistroOrcamento;
use DesignPatterns\Structural\Orcamento;
use DesignPatterns\Structural\Http\ReactPHPHttpAdapter;

// Test Adapter Pattern
//$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter()); // usávamos assim
$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter()); // se mudar a forma de requisitar, só mudaríamos aqui
$orcamento = new Orcamento();
$orcamento->valor = 1500.50;
$orcamento->quantidadeItens = 2;
$registroOrcamento->registrar($orcamento);

/**
 * A ideia é encapsular a implementação da conexão com a API dentro
 * do Adapter, sem que a classe de RegistroOrcamento precise saber
 * como essa implementação é feita. Apenas solicita o post e o adapter
 * se encarrega para usar a implementação definida.
 * A ideia em receber a interface no RegistroOrcamento é que caso seja
 * necessário trocar a forma de fazer a requisição, apenas criamos outro
 * Adapter e passamos a utiliza-lo (adaptador diferente).
 */