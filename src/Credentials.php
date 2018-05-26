<?php

namespace Revolution\Authorize;

class Credentials
{
    /**
     * @var array
     */
    private $credentials = [];

    /**
     * Credentials constructor.
     *
     * @param array $credentials
     */
    public function __construct($credentials = [])
    {
        $this->credentials = $credentials;
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function __set(string $name, $value)
    {
        $this->credentials[$name] = $value;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->credentials[$name];
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function __isset(string $name)
    {
        return isset($this->credentials[$name]);
    }

    /**
     * @param string $name
     */
    public function __unset(string $name)
    {
        unset($this->credentials[$name]);
    }
}
