<?php


namespace DesignPatterns\Structural;


use DesignPatterns\Structural\AcoesAoGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido[]  */
    private array $acoesAposGerarPedido = [];

    public function __construct(/*PedidosRepository, MailService, etc*/)
    {
    }

    public function adicionarAcaoAposGerarPedido(AcaoAposGerarPedido $acaoAposGerarPedido)
    {
        $this->acoesAposGerarPedido[] = $acaoAposGerarPedido;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        /* Observer Pattern */
        foreach ($this->acoesAposGerarPedido as $acaoAposGerarPedido) {
            $acaoAposGerarPedido->executaAcao($pedido);
        }
    }
}