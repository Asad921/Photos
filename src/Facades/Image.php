<?php

namespace Photos\Facades;

use Illuminate\Support\Facades\Facade;

class Image extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Photos';
    }
}