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
        return redirect()->route('services.show', ['service' => $service]);
    }

    public function store(Request $request)
    {
        $service = Service::create($request->toArray());
        return redirect()->route('admin.services.edit', ['id' => $service->id ]);
    }

    public function create()
    {
        $service = new Service();
        return view('admin.pages.service_edit', ['service' => $service]);
    }

    /**
     * Updates given field of the Service
     * @param Service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Service $service)
    {
        $service->fill(request()->toArray());
        $service->save();
        return redirect()->route('services.show', ['service' => $service]);
    }

    /**
     * Returns view for editing Service
     * @param $service_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($service_id)
    {
        $service = Service::with('tariffs')->findOrFail($service_id);
        return view('admin.pages.service_edit', ['service' => $service]);
    }

    /**
     * Deletes given Service
     * @param Service $service
     * @return bool
     * @throws \Exception
     */
    public function delete(Service $service)
    {
        if ($service->delete()) {
            $status = true;
        } else {
            $status = false;
        }
        session()->flash('status', $status);
        return redirect()->back();
    }
}
