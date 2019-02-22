<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(14);
        $allCategories = Category::all();
        return view('web.categories.layout_archive', [
            'categories' => $categories,
            'allCategories' => $allCategories,
        ]);
    }

    public function show(string $category_slug)
    {
        $category = Category::with('services')->where('slug', '=', $category_slug)->firstOrFail();
        $allCategories = Category::all();
        return view('web.categories.layout_single', [
            'category' => $category,
            'services' => $category->services,
            'allCategories' => $allCategories,
        ]);
    }
}
