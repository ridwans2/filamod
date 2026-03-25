<?php

namespace Ridwans2\Filamod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ridwans2\Filamod\Modules
 */
class FilamentModules extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ridwans2\Filamod\Modules::class;
    }
}
