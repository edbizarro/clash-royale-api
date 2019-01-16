<?php

namespace Edbizarro\ClashRoyale;

use Exception;
use Tightenco\Collect\Support\Collection;

class Player extends Resource
{
    protected $resourceName = 'players';

    /**
     * @param array $options
     *
     * @return Collection
     * @throws Exception
     *
     * @see https://developer.clashroyale.com/api-docs/index.html#!/players/getPlayerBattles
     */
    public function battles(array $options = []): Collection
    {
        return $this->response(
            $this->api->makeRequest(
                $this->getResourceFinalUrl() . '/battlelog',
                $options
            )
        );
    }
}
