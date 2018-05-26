<?php

namespace Revolution\Authorize\Drivers;

use GuzzleHttp\Client;

class DefaultDriver extends AbstractDriver
{
    /**
     * @var Client
     */
    private $client;

    /**
     * DefaultDriver constructor.
     */
    public function __construct()
    {
        $this->client = new Client(['cookies' => true]);
    }

    /**
     * Login.
     *
     * @param mixed $credentials
     *
     * @return bool
     */
    public function login($credentials = null): bool
    {
        return true;
    }

    /**
     * Client.
     *
     * @return mixed
     */
    public function client()
    {
        return $this->client;
    }
}
