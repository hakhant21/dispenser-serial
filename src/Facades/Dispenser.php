<?php

namespace Serials\Communications\Facades;

use Illuminate\Support\Facades\Facade;

class Dispenser extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dispenser';
    }
}
