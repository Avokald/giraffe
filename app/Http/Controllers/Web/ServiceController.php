<?php

namespace App\Http\Controllers\Web;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = \App\Service::all()->chunk(10);
        dd($services);
        return view('web.service.all', ['services' => $services]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $service_id
     * @return \Illuminate\Http\Response
     */
    public function show($service_id)
    {
        $service = Service::with([
            'reviews',
            'tariffs', 'screenshots',
            'logo', 'banner',
            'materialImages',
            'pdfs', 'documents',
            'presentations'])
            ->findOrFail($service_id)
            ->get()[0];
        $service->reviews = $service->reviews()->with('replies')->paginate(1);
        return view('web.service.layout', ['service' => $service]);
    }
}
