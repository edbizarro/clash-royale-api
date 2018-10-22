<?php

namespace Edbizarro\ClashRoyale;

use GuzzleHttp\Client;

class Api
{
    /** @var \GuzzleHttp\Client */
    protected $client;

    /** @var   */
    protected static $defaultClientOptions = [
        RequestOptions::COOKIES => true,
        RequestOptions::CONNECT_TIMEOUT => 10,
        RequestOptions::TIMEOUT => 10,
        RequestOptions::ALLOW_REDIRECTS => false,
    ];

    public static function create(array $clientOptions = []): Api
    {
        $clientOptions = count($clientOptions)
            ? $clientOptions
            : static::$defaultClientOptions;
        $client = new Client($clientOptions);

        return new static($client);
    }

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function makeRequest()
    {

    }
}
