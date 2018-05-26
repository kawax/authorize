<?php

namespace Revolution\Authorize\Drivers;

use Revolution\Authorize\Contracts\Driver;

abstract class AbstractDriver implements Driver
{
    /**
     * Login.
     *
     * @param mixed $credentials
     *
     * @return bool
     */
    abstract public function login($credentials = null): bool;

    /**
     * Client.
     *
     * @return mixed
     */
    abstract public function client();
}
