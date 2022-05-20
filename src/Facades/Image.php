<?php

namespace Photos\Facades;

use Illuminate\Support\Facades\Facade;
use Photos\File;
use Auth;

class Image extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Photos';
    }
    protected static function upload($image, $folder, $parent_id, $parent_type)
    // 1: image, 2: folder-name, 3: model_id, 4: model-type
    {
        if($image){
            
            $path = $image->store($folder , 'public');
            $photo = new File();
            $photo->path = $path;
            $photo->parent_id = $parent_id;
            $photo->parent_type = $parent_type;
            $photo->user_id = Auth::user()->id;
            $photo->save();
        }
    }
}