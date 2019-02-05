<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use App\ServiceCompilation;
use Illuminate\Http\Request;

class ServiceCompilationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compilations = ServiceCompilation::all();
        dd($compilations);
        return view(); // TODO front
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compilation = new ServiceCompilation();
        $all_services = Service::all();
        return view('admin.pages.compilations.compilation_edit', [
            'compilation' => $compilation,
            'all_services' => $all_services,
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
        $compilation = ServiceCompilation::create($request->toArray());
        return redirect()->route('admin.compilations.edit', [
            'compilation' => $compilation->id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $serviceCompilationId
     * @return \Illuminate\Http\Response
     */
    public function edit(int $serviceCompilationId)
    {
        $compilation = ServiceCompilation::with('services')->findOrFail($serviceCompilationId);
        $all_services = Service::all();
        return view('admin.pages.compilations.compilation_edit', [
            'compilation'  => $compilation,
            'all_services' => $all_services,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceCompilation  $serviceCompilation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $serviceCompilationId)
    {
        $requestArray = $request->toArray() ?? [];
        dd($request);
        $serviceCompilation = ServiceCompilation::findOrFail($serviceCompilationId);
        $serviceCompilation->update($request->toArray());
        $serviceCompilation->save();
        return redirect()->route('admin.compilations.edit', ['serviceCompilationId' => $serviceCompilation->id]);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $serviceCompilationId
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $serviceCompilationId)
    {
        $serviceCompilation = ServiceCompilation::findOrFail($serviceCompilationId);
        $serviceCompilation->delete();
        return redirect()->route('admin.compilations.index');
    }
}
