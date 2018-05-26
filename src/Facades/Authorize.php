<?php

namespace Revolution\Authorize\Facades;

use Illuminate\Support\Facades\Facade;

use Revolution\Authorize\Contracts\Factory;

class Authorize extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
