<?php

namespace Image\photos\src\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Image\photos\src\Models\Photo;

class ImageController extends Controller
{
    public function upload_image($path, $parent_id, $parent_type)
    {
        $photo = new Photo();
        $photo->path = $path;
        $photo->parent_id = $parent_id;
        $photo->parent_type = $parent_type;
        $photo->user_id = user()->id;
        $photo->save();
    }
}
