<?php

namespace App\Http\Controllers\Web;

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
        $compilations = ServiceCompilation::all();
        dd($compilations);
        return view(); // TODO front
    }

    /**
     * Display the specified resource.
     *
     * @param  ServiceCompilation $service_compilation
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCompilation $service_compilation)
    {
        dd($service_compilation);
        return view(); // TODO front
    }
}
