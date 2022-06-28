<?php


namespace DesignPatterns\Structural\Http;


class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // exemplo de implementação
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $data);
        curl_exec($curl);
    }
}