<?php

namespace ivi3\ModuleMaker\providers;

use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;
use ivi3\ModuleMaker\Commands\MigrateModulesCommand;
use ivi3\ModuleMaker\Commands\ModuleMakeCommand;
use ivi3\ModuleMaker\Commands\SubModuleMakeCommand;

class ConsoleServiceProvider extends ServiceProvider
{

    /**
     * Namespace of the console commands
     *
     * @var string
     */
    protected $consoleNamespace = "ivi3\\ModuleMaker\\Commands";

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        MigrateModulesCommand::class,
        ModuleMakeCommand::class,
        SubModuleMakeCommand::class
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->resolveCommands());
    }

    /**
     * Resolve package commands
     *
     * @return array
     */
    private function resolveCommands()
    {
        return $this->commands;
    }

    /**
     * @return array
     */
    public function provides()
    {
        return $this->commands;
    }
}
