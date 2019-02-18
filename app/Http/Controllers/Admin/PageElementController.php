<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\PageElement;
use App\PageElementType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageElementController extends Controller
{
    public function index()
    {
        $pageElements = PageElement::paginate(10);
        return view('admin.pages.pageElements.page_elements', ['pageElements' => $pageElements]);
    }

    public function create()
    {
        $pageElement = new PageElement();
        $allPages = Page::all();
        $allPageElements = PageElement::all();
        $allPageElementTypes = PageElementType::all();
        return view('admin.pages.pageElements.page_element_edit', [
            'pageElement' => $pageElement,
            'allPages' => $allPages,
            'allPageElements' => $allPageElements,
            'allPageElementTypes' => $allPageElementTypes,
        ]);
    }

    public function store(Request $request)
    {
        $pageElement = PageElement::create($request->toArray());
        return redirect()->route('admin.page-elements.edit', $pageElement);
    }

    public function edit(int $pageElementId)
    {
        $pageElement = PageElement::findOrFail($pageElementId);
        $allPages = Page::all();
        $allPageElements = PageElement::all();
        $allPageElementTypes = PageElementType::all();
        return view('admin.pages.pageElements.page_element_edit', [
            'pageElement' => $pageElement,
            'allPages' => $allPages,
            'allPageElements' => $allPageElements,
            'allPageElementTypes' => $allPageElementTypes,
        ]);
    }

    public function update(Request $request, int $pageElementId)
    {
        $pageElement = PageElement::findOrFail($pageElementId);
        $pageElement->update($request->toArray());
        $pageElement->save();
        return redirect()->route('admin.page-elements.edit', $pageElementId);
    }

    public function destroy(int $pageElementId)
    {
        dd(request());
        $status = PageElement::findOrFail($pageElementId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.page-elements.index');
    }

}
