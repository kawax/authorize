<?php

namespace Tests;

use Mockery as m;

use Revolution\Authorize\Facades\Authorize;

use Revolution\Authorize\AuthorizeManager;
use Revolution\Authorize\Drivers\DefaultDriver;
use Revolution\Authorize\Credentials;

use GuzzleHttp\Client as GuzzleClient;

class AuthorizeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        m::close();
    }

    public function testManager()
    {
        $manager = new AuthorizeManager(null);

        $this->assertInstanceOf(AuthorizeManager::class, $manager);
    }

    public function testDefaultDriver()
    {
        $driver = Authorize::driver();

        $this->assertInstanceOf(DefaultDriver::class, $driver);
    }

    public function testDefaultLogin()
    {
        $login = Authorize::driver()->login();

        $this->assertTrue($login);
    }

    public function testDefaultClient()
    {
        $client = Authorize::driver()->client();

        $this->assertInstanceOf(GuzzleClient::class, $client);
    }

    public function testWithOutLaravel()
    {
        $manager = new AuthorizeManager(null);

        $login = $manager->driver()->login();
        $client = $manager->driver()->client();

        $this->assertTrue($login);
        $this->assertInstanceOf(GuzzleClient::class, $client);
    }

    public function testCredentials()
    {
        $credentials = new Credentials(['login' => 'login']);
        $credentials->pass = 'pass';

        $this->assertEquals('login', $credentials->login);
        $this->assertEquals('pass', $credentials->pass);
    }
}
