<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->artisan('migrate:refresh', ['--database' => 'testing']);

        $this->withFactories(__DIR__ . '/../src/bootstrap/factories');
    }
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            'DazzleApp\Audience\Providers\DazzleAppAudienceServiceProvider',
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Uuid' => 'Webpatser\Uuid\Uuid',
        ];
    }
}
