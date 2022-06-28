<?php

namespace DesignPatterns\Structural\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}