<?php

namespace ivi3\ModuleMaker\Commands;

use Illuminate\Console\Command;

class ModuleMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make Sub Module';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
