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
        if (request()->category_id || (request()->price_min && request()->price_max) || request()->field_name) {
            $compilations = ServiceCompilation::categoryId(request()->category_id)
                ->priceBetween(request()->price_min, request()->price_max)
                ->sortBy(request()->field_name)
                ->paginate(6);
        } else {
            $compilations = ServiceCompilation::paginate(6);
        }
        $allCategories = Category::with('services')->get();
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
