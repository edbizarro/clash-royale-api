<?php

namespace Edbizarro\ClashRoyale;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Edbizarro\ClashRoyale\Api
 */
class ClashRoyaleFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'clash-royale';
    }
}
