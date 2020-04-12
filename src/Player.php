<?php

namespace Edbizarro\ClashRoyale;

use Exception;
use Tightenco\Collect\Support\Collection;

class Player extends Resource
{
    protected $resourceName = 'players';

    /**
     * Returns a list of battles that the Player has recently participated in.
     *
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
                $this->getResourceFinalUrl().'/battlelog',
                $options
            )
        );
    }

    /**
     * Returns the chests that are upcoming for the Player.
     *
     * @param array $options
     *
     * @return Collection
     * @throws Exception
     *
     * @see https://developer.clashroyale.com/api-docs/index.html#!/players/getPlayerUpcomingChests
     */
    public function upcomingChests(array $options = []): Collection
    {
        return $this->response(
            $this->api->makeRequest(
                $this->getResourceFinalUrl().'/upcomingchests',
                $options
            )
        );
    }
}
