<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Controller;
use \App\ServiceCompilationSituation;
use Illuminate\Http\Request;

class ServiceCompilationSituationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situations = ServiceCompilationSituation::paginate(20);
        return view('admin.pages.situations.situations', [
            'situations' => $situations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $situation = new ServiceCompilationSituation();
        $allCompilations = \App\ServiceCompilation::all();
        return view('admin.pages.situations.situation_edit', [
            'situation' => $situation,
            'allCompilations' => $allCompilations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $situation = ServiceCompilationSituation::create($request->toArray());

        if (isset($request['service_compilations_id'])) {
            $situation->serviceCompilations()->sync($request['service_compilations_id']);
        }

        return redirect()->route('admin.situations.edit', $situation->id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $serviceCompilationSituationId
     * @return \Illuminate\Http\Response
     */
    public function edit(int $serviceCompilationSituationId)
    {
        $serviceCompilationSituation = ServiceCompilationSituation::findOrFail($serviceCompilationSituationId);
        $allCompilations = \App\ServiceCompilation::all();
        return view('admin.pages.situations.situation_edit', [
            'situation' => $serviceCompilationSituation,
            'allCompilations' => $allCompilations,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $serviceCompilationSituationId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $serviceCompilationSituationId)
    {
        $serviceCompilationSituation = ServiceCompilationSituation::findOrFail($serviceCompilationSituationId);
        $serviceCompilationSituation->update($request->toArray());

        $serviceCompilationSituation->serviceCompilations()->detach();
        if (isset($request['service_compilations_id'])) {
            $serviceCompilationSituation->serviceCompilations()->sync($request['service_compilations_id']);
        }

        return redirect()->route('admin.situations.edit', $serviceCompilationSituation->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $serviceCompilationSituationId
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $serviceCompilationSituationId)
    {
        $status = ServiceCompilationSituation::findOrFail($serviceCompilationSituationId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.situations.index');
    }
}
