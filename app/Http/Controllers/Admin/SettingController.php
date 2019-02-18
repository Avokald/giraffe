<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\PageElementType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::paginate(30);
        return view('admin.pages.settings.settings', [
            'settings' => $settings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = new Setting();
        $allPageElementTypes = PageElementType::all();
        return view('admin.pages.settings.setting_edit', [
            'setting' => $setting,
            'allPageElementTypes' => $allPageElementTypes,
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
        $setting = Setting::create($request->toArray());
        return redirect()->route('admin.settings.edit', $setting->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(int $settingId)
    {
        $setting = Setting::findOrFail($settingId);
        $allPageElementTypes = PageElementType::all();
        return view('admin.pages.settings.setting_edit', [
            'setting' => $setting,
            'allPageElementTypes' => $allPageElementTypes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $settingId)
    {
        $setting = Setting::findOrFail($settingId);
        $setting->update($request->toArray());
        $setting->save();
        return redirect()->route('admin.settings.edit', $setting->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $settingId)
    {
        $setting = Setting::findOrFail($settingId);
        $status = $setting->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.settings.index');
    }
}
