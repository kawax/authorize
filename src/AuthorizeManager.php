<?php

namespace Revolution\Authorize;

use Illuminate\Support\Manager;

use Revolution\Authorize\Contracts\Factory;

class AuthorizeManager extends Manager implements Factory
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return 'default';
    }

    /**
     * Create an instance of the specified driver.
     *
     * @return \Revolution\Authorize\Drivers\AbstractDriver
     */
    protected function createDefaultDriver()
    {
        return new Drivers\DefaultDriver();
    }

    /**
     * Create an instance of the specified driver.
     *
     * @return \Revolution\Authorize\Drivers\AbstractDriver
     */
    protected function createNiconicoDriver()
    {
        return new Drivers\NiconicoDriver();
    }

    /**
     * Create an instance of the specified driver.
     *
     * @return \Revolution\Authorize\Drivers\AbstractDriver
     */
    protected function createA8netDriver()
    {
        return new Drivers\A8netDriver();
    }

    /**
     * Create an instance of the specified driver.
     *
     * @return \Revolution\Authorize\Drivers\AbstractDriver
     */
    protected function createValueCommerceDriver()
    {
        return new Drivers\ValueCommerceDriver();
    }
}
