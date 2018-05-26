<?php

namespace Tests;

use Revolution\Authorize\Providers\AuthorizeServiceProvider;
use Revolution\Authorize\Facades\Authorize;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            AuthorizeServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Authorize' => Authorize::class,
        ];
    }
}
