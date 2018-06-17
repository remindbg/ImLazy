<?php

namespace remindbg\lazya;

use Illuminate\Support\Facades\Facade;

class LazyaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lazya';
    }
}
