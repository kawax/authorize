<?php

namespace Revolution\Authorize\Drivers;

use Goutte\Client;

class NiconicoDriver extends AbstractDriver
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
        $this->client = new Client();
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
        $crawler = $this->client->request('POST', 'https://account.nicovideo.jp/api/v1/login', [
            'mail_tel' => data_get($credentials, 'mail'),
            'password' => data_get($credentials, 'password'),
        ]);

        return $crawler->getUri() === 'https://account.nicovideo.jp/my/account';
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
