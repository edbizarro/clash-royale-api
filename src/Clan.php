<?php

namespace Edbizarro\ClashRoyale;

use Exception;
use Tightenco\Collect\Support\Collection;

class Clan extends Resource
{
    protected $resourceName = 'clans';

    /**
     * @param array $options
     *
     * @return Collection
     * @throws Exception
     *
     * @see https://developer.clashroyale.com/api-docs/index.html#!/clans/searchClans
     */
    public function search(array $options): Collection
    {
        if (count($options) === 0) {
            throw new Exception('You must provide atr least one seach criteria');
        }

        return $this->response($this->api->makeRequest(
            $this->resourceName,
            $options
        ));
    }
}
