<?php

namespace Photo\Facades;

use Illuminate\Support\Facades\Facade;

class Photo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'photo';
    }
}