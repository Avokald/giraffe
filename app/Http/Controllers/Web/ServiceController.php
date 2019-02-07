<?php

namespace App\Http\Controllers\Web;

use App\Service;
use \App\Category;
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
        $services = Service::paginate(3);
        $allCategories = Category::all();
        return view('web.service.layout_archive', [
            'services' => $services,
            'allCategories' => $allCategories,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $service_id
     * @return \Illuminate\Http\Response
     */
    public function show(string $serviceSlug)
    {
        $service = Service::with([
            'reviews',
            'tariffs', 'screenshots',
            'logo', 'banner',
            'materialImages',
            'pdfs', 'documents',
            'presentations'])
            ->where('slug', '=', $serviceSlug)
            ->first();
        $service->reviews = $service->reviews()->with('replies')->paginate(1);
        return view('web.service.layout_single', ['service' => $service]);
    }
}
