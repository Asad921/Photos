<?php

namespace Photos\Facades;

use Illuminate\Support\Facades\Facade;
use Photos\Sample;
use Auth;

class Image extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Photos';
    }
    protected static function upload_image($path, $parent_id, $parent_type)
    {
        $photo = new Sample();
        $photo->path = $path;
        $photo->parent_id = $parent_id;
        $photo->parent_type = $parent_type;
        $photo->user_id = Auth::user()->id;
        $photo->save();
    }
}