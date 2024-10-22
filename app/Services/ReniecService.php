<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class ReniecService
{
    protected $client;
    protected $token;
    protected $baseUri;

    public function __construct()
    {
        $this->client = new Client();
        $this->token = env('API_TOKEN');
        $this->baseUri = 'https://api.apis.net.pe/v2/reniec/dni?numero=';
        Log::info('Token: ' . $this->token);
    }

    public function getDniInfo($dni)
    {
        try {
            $response = $this->client->request('GET', $this->baseUri, [
                'query' => ['dni' => $dni],
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Accept' => 'application/json',
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                $statusCode = $response->getStatusCode();
                $body = $response->getBody();
                Log::error('Error de respuesta: ' . $body);
                return json_decode($body, true);
            } else {
                Log::error('No se pudo completar la solicitud');
                return ['error' => 'No se pudo completar la solicitud'];
            }
        }
    }
}
