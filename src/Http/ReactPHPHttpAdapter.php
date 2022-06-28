<?php


namespace DesignPatterns\Structural\Http;


class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        echo 'ReactPHP';
    }
}