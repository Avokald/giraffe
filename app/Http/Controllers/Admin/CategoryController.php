<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.pages.categories.categories', ['categories' => $categories]);
    }

    public function show()
    {
        // TODO
    }

    public function create()
    {
        $category = new Category();
        $allServices = Service::all();
        return view('admin.pages.categories.category_edit', [
            'category' => $category,
            'allServices' => $allServices,
        ]);
    }

    public function store(Request $request)
    {
        $request = $request->toArray();
        $category = Category::create($request);

        if ($request['logo']) {
            $image = \App\Image::findOrFail($request['logo']);
            $image->updateParent([
                'imageable_type' => Category::class,
                'imageable_id' => $category->id,
            ]);
        }

        return redirect()->route('admin.categories.edit', $category->id);
    }

    public function edit(int $category_id)
    {
        $category = Category::findOrFail($category_id);
        $allServices = Service::all();
        return view('admin.pages.categories.category_edit', [
            'category' => $category,
            'allServices' => $allServices,

        ]);
    }

    public function update(Request $request, int $category_id)
    {
        $category = Category::findOrFail($category_id);
        $category->updateMain($request->toArray());
        return redirect()->route('admin.categories.edit', $category->id);
    }

    public function destroy(int $category_id)
    {
        $status = Category::findOrFail($category_id)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.categories.index');
    }
}
