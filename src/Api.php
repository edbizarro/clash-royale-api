<?php

namespace Edbizarro\ClashRoyale;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

class Api
{
    /** @var string */
    protected $apiUrl = 'https://api.clashroyale.com/';

    /** @var string */
    protected $apiVersion = 'v1';

    /** @var \GuzzleHttp\Client */
    protected $client;

    /**
     * @var string
     */
    protected static $apiToken;

    /**
     * @var array
     */
    protected static $defaultClientOptions = [
        RequestOptions::COOKIES => true,
        RequestOptions::CONNECT_TIMEOUT => 10,
        RequestOptions::TIMEOUT => 10,
        RequestOptions::ALLOW_REDIRECTS => false,
    ];

    /**
     * @param $token
     *
     * @return $this
     */
    public static function setApiToken($token)
    {
        static::$apiToken = $token;
    }

    public function __construct(Client $client = null)
    {
        $clientOptions = static::$defaultClientOptions;

        $clientOptions = array_merge($clientOptions, [
            RequestOptions::HEADERS => [
                'Authorization' => 'Bearer '.static::$apiToken,
                'Accept' => 'application/json',
            ],
        ]);

        $this->client = $client ?? new Client($clientOptions);
    }

    /**
     * @param $resource
     * @param array $options
     *
     * @return ResponseInterface
     * @throws Exception
     */
    public function makeRequest($resource, array $options = []): ResponseInterface
    {
        if (! static::$apiToken) {
            throw new Exception('API token must be provided');
        }

        return $this->client->get(
            $this->apiUrl.$this->apiVersion.'/'.$resource,
            ['query' => $options]
        );
    }
}
