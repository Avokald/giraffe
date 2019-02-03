<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // TODO pagination
        dd($categories);
        return view('admin.pages.categories.categories', ['categories' => $categories]);
    }

    public function show()
    {
        // TODO
    }

    public function create()
    {
        $category = new Category();
        return view('admin.pages.categories.category_edit', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->toArray());
        return redirect()->route('admin.categories.edit', ['category_id' => $category->id]);
    }

    public function edit(int $category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('admin.pages.categories.category_edit', compact('category'));
    }

    public function update(Request $request, int $category_id)
    {
        $category = Category::findOrFail($category_id);
        dd($request, $category);
        // TODO
    }

    public function destroy(int $category_id)
    {
        $category = Category::findOrFail($category_id);
        dd($category);
        // TODO
    }
}
