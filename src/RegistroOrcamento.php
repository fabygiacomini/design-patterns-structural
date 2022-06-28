<?php


namespace DesignPatterns\Structural;

use DesignPatterns\Structural\EstadosOrcamento\Finalizado;
use DesignPatterns\Structural\Http\HttpAdapter;


class RegistroOrcamento
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento)
    {
        if ($orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API');
        }

        $this->http->post(
            'http://api.registrar.orcamento',
            [
                'valor' => $orcamento->valor,
                'quantidadeItens' => $orcamento->quantidadeItens
            ]
        );

    }
}