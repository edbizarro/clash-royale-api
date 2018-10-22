<?php

namespace Edbizarro\ClashRoyale;

use GuzzleHttp\Client;

class Api
{
    protected $apiUrl = 'https://api.clashroyale.com/';

    protected $apiVersion = 'v1';

    /** @var \GuzzleHttp\Client */
    protected $client;

    protected static $defaultClientOptions = [
        RequestOptions::COOKIES => true,
        RequestOptions::CONNECT_TIMEOUT => 10,
        RequestOptions::TIMEOUT => 10,
        RequestOptions::ALLOW_REDIRECTS => false,
    ];

    /**
     * @param array $clientOptions
     *
     * @return Api
     */
    public static function create(array $clientOptions = []): Api
    {
        $clientOptions = count($clientOptions)
            ? $clientOptions
            : static::$defaultClientOptions;
        $client = new Client($clientOptions);

        return new static($client);
    }

    public function __construct(Client $client = null)
    {
        $this->client = $client;
    }

    /**
     * @param $resource
     * @param array $options
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function makeRequest($resource, array $options)
    {
        return $this->client->get(
            $this->apiUrl.$this->apiVersion.$resource,
            ['query' => $options]
        );
    }
}
