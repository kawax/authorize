<?php

namespace Revolution\Authorize\Drivers;

use Goutte\Client;
use Symfony\Component\BrowserKit\Cookie;

class ValueCommerceDriver extends AbstractDriver
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
        $crawler = $this->client->request('GET', 'https://aff.valuecommerce.ne.jp/?type=4');

        //これがないとJSかCookieが無効と判断される
        $this->client->getCookieJar()
                     ->set(new Cookie('I_do_Javascript', 'yes', strtotime('+1 day')));

        $form = $crawler->filter('form')->form();

        $crawler = $this->client->submit($form, [
            'login_form[emailAddress]'    => data_get($credentials, 'mail'),
            'login_form[encryptedPasswd]' => data_get($credentials, 'password'),
        ]);

        return $crawler->getUri() === 'https://aff.valuecommerce.ne.jp/home';
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
