<?php


namespace DesignPatterns\Structural;

use DesignPatterns\Structural\Orcamento;


// implementar o Iterator seria trabalhoso e nos forçaria a implementar métodos que não vamos usar
// a classe IteratorAggregate já encapsula essa ideia e apenas exige o método que retorno um Iterator
class ListaDeOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] $orcamento */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        // ArrayIterator recebe um array normal e retorna um Iterator
        return new \ArrayIterator($this->orcamentos);
    }
}