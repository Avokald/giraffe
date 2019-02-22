<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ServiceCompilation;
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

    public function create()
    {
        $service = new Service();
        $all_categories = Category::all();
        $all_compilations = ServiceCompilation::all();
        $allServicesExceptCurrent = Service::all();
        return view('admin.pages.service_edit', [
            'service' => $service,
            'all_categories' => $all_categories,
            'all_compilations' => $all_compilations,
            'allServicesExceptCurrent' => $allServicesExceptCurrent,
        ]);
    }

    public function store(Request $request)
    {
        $service = Service::create($request->toArray());

        $service->relationshipsSave($request->toArray());

        return redirect()->route('admin.services.edit', ['id' => $service->id ]);
    }

    /**
     * Returns view for editing Service
     * @param $service_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($service_id)
    {
        $service = Service::with('tariffs', 'category')->findOrFail($service_id);
        $all_categories = Category::all();
        $all_compilations = ServiceCompilation::all();
        $allServicesExceptCurrent = Service::all()->except($service->id);
        return view('admin.pages.service_edit', [
            'service' => $service,
            'all_categories' => $all_categories,
            'all_compilations' => $all_compilations,
            'allServicesExceptCurrent' => $allServicesExceptCurrent,
        ]);
    }

    /**
     * Updates given field of the Service
     * @param Service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $service_id)
    {
        $service = Service::findOrFail($service_id);
        $service->mainUpdate($request->toArray());
        return redirect()->route('admin.services.edit', ['service' => $service]);
    }

    /**
     * Deletes given Service
     * @param Service $service
     * @return bool
     * @throws \Exception
     */
    public function destroy(int $serviceId)
    {
        $status = Service::findOrFail($serviceId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.services.index');
    }
}
