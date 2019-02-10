<?php

namespace App\Http\Controllers\Admin;

use \App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::paginate(10); // TODO Pagination
        return view('admin.pages.custom.pages', ['pages' => $pages]);
    }

    public function create()
    {
        $page = new Page();
        return view('admin.pages.custom.page_edit', ['page' => $page]);
    }

    public function store(Request $request)
    {
        $page = Page::create($request->toArray());
        return redirect()->route('admin.pages.edit', $page);
    }

    public function edit(int $page_id)
    {
        $page = Page::findOrFail($page_id);
        return view('admin.pages.custom.page_edit', ['page' => $page]);
        // TODO
    }

    public function update(Request $request, int $page_id)
    {
        $page = Page::findOrFail($page_id);
        $page->update($request->toArray());
        $page->save();
        foreach ( $request->page_elements as $element_name => $element_value ) {
            $element = $page->getElementByName($element_name);
            $element->values = $element_value;
            $element->save();
        }
        return redirect()->route('admin.pages.edit', ['page_id' => $page_id]);
    }

    public function destroy(int $page_id)
    {
        dd($page_id);
        // TODO
    }

}
