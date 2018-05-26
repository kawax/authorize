# Extend

## In Your Project

### 1.Create Custom Driver

```php
<?php

namespace App\Authorize;

use Revolution\Authorize\Drivers\AbstractDriver;

use GuzzleHttp\Client;

class CustomDriver extends AbstractDriver
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

```
### 2.Extend at ServiceProvider

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Revolution\Authorize\Facades\Authorize;

use App\Authorize\CustomDriver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Authorize::extend('custom', function ($app) {
            return new CustomDriver;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

```

### 3. Use driver

```php
    if (Authorize::driver('custom')->login($credentials)) {
        /**
         * @var \GuzzleHttp\Client $client
         */
        $client = Authorize::driver('custom')->client();
    }

```

## Composer package
Same as Socialite.
