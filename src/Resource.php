<?php

namespace Edbizarro\ClashRoyale;

use Psr\Http\Message\ResponseInterface;
use Tightenco\Collect\Support\Collection;

abstract class Resource
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @var string
     */
    protected $resourceName;

    /**
     * @var string
     */
    protected $resourceIdentifier;

    /**
     * Resource constructor.
     *
     * @param string|null $resourceIdentifier
     */
    public function __construct(string $resourceIdentifier = null)
    {
        $this->api = new Api();
        $this->resourceIdentifier = $resourceIdentifier;
    }

    /**
     * @param array $options
     *
     * @return Collection
     * @throws \Exception
     */
    public function get(array $options = []): Collection
    {
        return $this->response($this->makeRequest($options));
    }

    /**
     * @param array $options
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    protected function makeRequest(array $options = []): \Psr\Http\Message\ResponseInterface
    {
        return $this->api->makeRequest($this->getResourceFinalUrl(), $options);
    }

    /**
     * @return string
     */
    protected function getResourceFinalUrl(): string
    {
        return $this->resourceName.'/'.rawurlencode($this->resourceIdentifier);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return Collection
     */
    protected function response(ResponseInterface $response): Collection
    {
        return new Collection(\GuzzleHttp\json_decode($response->getBody()->getContents()));
    }
}
