<?php

namespace Photos;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use src\Sample;

class ImageController extends Controller
{
    public function upload($path, $parent_id, $parent_type)
    {
        $photo = new Sample();
        $photo->path = $path;
        $photo->parent_id = $parent_id;
        $photo->parent_type = $parent_type;
        $photo->user_id = user()->id;
        $photo->save();
    }
}
