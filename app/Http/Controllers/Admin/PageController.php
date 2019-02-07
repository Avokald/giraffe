<?php

namespace App\Http\Controllers\Admin;

use \App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all(); // TODO Pagination
        dd($pages);
    }

    public function create()
    {
        $page = new Page();
        return view('admin.pages.custom.page_edit', ['page' => $page]);
    }

    public function store(Request $request)
    {
        // TODO
    }

    public function edit(int $page_id)
    {
        $page = Page::findOrFail($page_id);
        return view('admin.pages.custom.page_edit', ['page' => $page]);
        // TODO
    }

    public function update(Request $request, int $page_id)
    {
        dd($request);
        $page = Page::findOrFail($page_id);
        $page->update($request->toArray());
        $page->save();
        return redirect()->route('admin.pages.edit', ['page_id' => $page_id]);
        // TODO
    }

    public function destroy(int $page_id)
    {
        // TODO
    }

}
