<?php

namespace ivi3\ModuleMaker;

use Illuminate\Support\ServiceProvider;
use ivi3\ModuleMaker\providers\ConsoleServiceProvider;

class ModuleMakerServiceProvider extends ServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {

    }

    public function register()
    {
        $this->app->register(ConsoleServiceProvider::class);
    }
}
