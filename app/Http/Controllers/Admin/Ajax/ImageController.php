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
        return [
            'id' =>$image->id,
            'url' => $image->url,
        ];
    }

    public function destroy(Request $request)
    {
        $image = Image::findOrFail($request->image_id);
        $image->unbound();
        // TODO
    }
}
