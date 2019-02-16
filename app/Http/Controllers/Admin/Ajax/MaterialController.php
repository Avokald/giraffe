<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Material;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('file');
        $material = Material::upload($file);
        return [
            'id' => $material->id,
            'name' => $material->name,
        ];
    }

    public function destroy(Request $request)
    {
        $material = Material::findOrFail($request->material_id);
        $material->unbound();
    }
}
