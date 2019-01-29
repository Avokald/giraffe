<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Service;

class ServiceController extends Controller
{
    /**
     * Displays paged services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.pages.services', ['services' => $services]);
    }

    /**
     * Displays single service
     * @param Service $service
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Service $service)
    {
        return view('service.layout', ['service' => $service]);
    }

    public function update(Service $service)
    {
        $service->fill(request()->toArray());
        $service->save();
        return redirect()->route('services.show', ['service' => $service]);
    }

    public function edit($service_id)
    {
        $service = Service::with('tariffs')->findOrFail($service_id);
        return view('admin.pages.service_edit', ['service' => $service]);
    }
}
