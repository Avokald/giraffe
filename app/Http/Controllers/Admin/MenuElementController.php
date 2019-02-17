<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\MenuElement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuElements = MenuElement::paginate(20);
        return view('admin.pages.menuElements.menu_elements', ['menuElements' => $menuElements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menuElement = new MenuElement();
        $allMenuElements = MenuElement::all();
        $allMenus = Menu::all();
        return view('admin.pages.menuElements.menu_element_edit', [
            'menuElement' => $menuElement,
            'allMenuElements' => $allMenuElements,
            'allMenus' => $allMenus,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menuElement = MenuElement::create($request->toArray());
        $menuElement->relationshipsSave($request->toArray());
        return redirect()->route('admin.menu-elements.edit', $menuElement->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuElement  $menuElement
     * @return \Illuminate\Http\Response
     */
    public function show(MenuElement $menuElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuElement  $menuElement
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuElement $menuElement)
    {
        $allMenuElements = MenuElement::all();
        $allMenus = Menu::all();
        return view('admin.pages.menuElements.menu_element_edit', [
            'menuElement' => $menuElement,
            'allMenuElements' => $allMenuElements,
            'allMenus' => $allMenus,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuElement  $menuElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuElement $menuElement)
    {
        $menuElement->mainUpdate($request->toArray());
        return redirect()->route('admin.menu-elements.edit', $menuElement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuElement  $menuElement
     * @return \Illuminate\Http\Response
     * @throws
     */
    public function destroy(MenuElement $menuElement)
    {
        $menuElement->delete();
        return redirect()->route('admin.menu-elements.index');
    }
}
