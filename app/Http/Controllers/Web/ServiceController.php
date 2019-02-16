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
        if (request()->category_id || request()->field_name
            || (request()->price_min && request()->price_max)) {

            if (request()->field_name == 'created_at') {
                $direction = 'asc';
            }

            $services = Service::categoryId(request()->category_id)
                ->priceBetween(request()->price_min, request()->price_max)
                ->sortBy(request()->field_name, $direction )
                ->paginate(6);
        } else {
            $services = Service::paginate(6);
        }
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
            ->firstOrFail();
        $service->reviews = $service->reviews()->with('replies')->paginate(1);
        return view('web.service.layout_single', ['service' => $service]);
    }
}
