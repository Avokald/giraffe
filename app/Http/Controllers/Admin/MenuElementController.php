<?php

namespace App\Http\Controllers\Admin;

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
        $menuElements = MenuElement::paginate(50);
        return view('admin.pages.menu.menus', ['menu' => $menuElements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuElement  $menuElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuElement $menuElement)
    {
        //
    }
}
