<?php


namespace DesignPatterns\Structural;


class DadosExtrinsecosPedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    public function __construct(\DateTimeInterface $dataFinalizacao, string $nomeCliente)
    {
        $this->dataFinalizacao = $dataFinalizacao;
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return string
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * @param string $nomeCliente
     */
    public function setNomeCliente(string $nomeCliente): void
    {
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDataFinalizacao(): \DateTimeInterface
    {
        return $this->dataFinalizacao;
    }

    /**
     * @param \DateTimeInterface $dataFinalizacao
     */
    public function setDataFinalizacao(\DateTimeInterface $dataFinalizacao): void
    {
        $this->dataFinalizacao = $dataFinalizacao;
    }
}