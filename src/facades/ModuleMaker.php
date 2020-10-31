<?php

namespace ivi3\ModuleMaker\facades;

use Illuminate\Support\Facades\Facade;

class ModuleMaker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "ModuleMaker";
    }
}
