<?php

namespace Revolution\Authorize\Contracts;

interface Factory
{
    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver();
}
