<?php

namespace brucedeity\LaravelPageSpeed\Test;

use brucedeity\LaravelPageSpeed\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestDisabledMiddlewareCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }
}
