<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Http\Controllers\Controller;
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
        $compilations = ServiceCompilation::paginate(3);
        $allCategories = Category::all();
        return view('web.compilations.layout_archive', [
            'compilations' => $compilations,
            'allCategories' => $allCategories,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  ServiceCompilation $compilation
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCompilation $compilation)
    {
        return view('web.compilations.layout_single', [
            'compilation' => $compilation,
        ]);
    }
}
