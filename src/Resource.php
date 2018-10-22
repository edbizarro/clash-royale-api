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
     * @return Collection
     * @throws \Exception
     */
    public function get(): Collection
    {
        return $this->response($this->api->makeRequest(
            $this->resourceName.'/'.rawurlencode($this->resourceIdentifier)
        ));
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
