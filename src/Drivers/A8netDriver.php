<?php

namespace Revolution\Authorize\Drivers;

use Goutte\Client;

class A8netDriver extends AbstractDriver
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
     * @param \Revolution\Authorize\Credentials $credentials
     *
     * @return bool
     */
    public function login($credentials = null): bool
    {
        $crawler = $this->client->request('GET', 'https://www.a8.net/');

        $form = $crawler->filter('form[name=asLogin]')->form();

        $crawler = $this->client->submit($form, [
            'login'  => data_get($credentials, 'login'),
            'passwd' => data_get($credentials, 'password'),
            'moa'    => '/a8',
        ]);

        return $crawler->getUri() === 'https://pub.a8.net/a8v2/asMemberAction.do';
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
