<?php

namespace App\Http\Controllers\Admin\Ajax;

use \App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $image_file = $request->file('image');
        $image = Image::upload($image_file);
        return $image->id;
    }

    public function destroy(Image $image)
    {
        $image->delete();
        // TODO
    }
}
