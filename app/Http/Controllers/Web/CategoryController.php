<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        dd($categories);
    }

    public function show(string $category_slug)
    {
        $category = Category::with('services')->where('slug', '=', $category_slug)->first();
        dd($category);
    }
}
