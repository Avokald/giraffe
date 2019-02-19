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
        if (request()->category_id || request()->field_name
            || (request()->price_min && request()->price_max)) {

            if (request()->field_name == 'created_at') {
                $direction = 'asc';
            }

            $compilations = ServiceCompilation::equal('category_id', request()->category_id)
                ->between('price_month', request()->price_min, request()->price_max)
                ->sortBy(request()->field_name, $direction ?? 'desc')
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
        $compilation->view_count++;
        $compilation->save();
        return view('web.compilations.layout_single', [
            'compilation' => $compilation,
        ]);
    }
}
