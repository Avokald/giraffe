<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use App\Image;
use App\Category;
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
        $compilations = ServiceCompilation::paginate(10);
        return view('admin.pages.compilations.compilations', [
            'compilations' => $compilations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compilation = new ServiceCompilation();
        $allServices = Service::all();
        $allCategories = Category::all();
        return view('admin.pages.compilations.compilation_edit', [
            'compilation' => $compilation,
            'allServices' => $allServices,
            'allCategories' => $allCategories,
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
        if ($request['services']) {
            $compilation->services()->sync($request['services']);
        }

        if ($request['logo']) {
            $image = Image::findOrFail($request['logo']);
            $image->updateParent([
                'imageable_type' => ServiceCompilation::class,
                'imageable_id' => $compilation->id,
            ]);
        }

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
        $allServices = Service::all();
        $allCategories = Category::all();
        return view('admin.pages.compilations.compilation_edit', [
            'compilation'  => $compilation,
            'allServices' => $allServices,
            'allCategories' => $allCategories,
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
        $serviceCompilation = ServiceCompilation::findOrFail($serviceCompilationId);
        $serviceCompilation->updateMain($request->toArray());
        return redirect()->route('admin.compilations.edit', $serviceCompilation->id);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $serviceCompilationId
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $serviceCompilationId)
    {
        $status = ServiceCompilation::findOrFail($serviceCompilationId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.compilations.index');
    }
}
