<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Schema;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();
        $app->Schema::disableForeignKeyConstraints();
        // $app['config']->set('database.default','dusktesting');
        // $app['config']->set('database.connections.dusktesting.database', 'dusktest');
        return $app;
    }
}
