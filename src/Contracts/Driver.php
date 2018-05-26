<?php

namespace Revolution\Authorize\Contracts;

interface Driver
{
    /**
     * Login.
     *
     * @param mixed $credentials
     *
     * @return bool
     */
    public function login($credentials = null): bool;

    /**
     * Client.
     *
     * @return mixed
     */
    public function client();
}
