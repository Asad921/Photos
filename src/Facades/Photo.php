<?php

namespace Photos\Facades;

use Illuminate\Support\Facades\Facade;

class Photos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'photos';
    }
}