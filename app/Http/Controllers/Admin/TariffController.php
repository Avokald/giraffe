<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use \App\Tariff;
use \App\Service;

class TariffController extends Controller
{
    public function index()
    {
        $tariffs = Tariff::paginate(30);
        return view('admin.pages.tariffs.tariffs', ['tariffs' => $tariffs]);
    }

    public function create()
    {
        $tariff = new Tariff();
        $allServices = Service::all();
        return view('admin.pages.tariffs.tariff_edit', [
            'tariff' => $tariff,
            'allServices' => $allServices,
        ]);
    }

    public function store(Request $request)
    {
        $request = $request->toArray();

        $request['is_recommended'] = $request['is_recommended'] ? 1: 0;

        $tariff = Tariff::create($request);

        return redirect()->route('admin.tariffs.edit', $tariff);
    }

    public function edit(int $tariff_id)
    {
        $tariff = Tariff::findOrFail($tariff_id);
        $allServices = Service::all();
        return view('admin.pages.tariffs.tariff_edit', [
            'tariff' => $tariff,
            'allServices' => $allServices,
        ]);
    }

    public function update(Request $request, int $tariff_id)
    {
        $request = $request->toArray();
        $tariff = Tariff::findOrFail($tariff_id);

        $request['is_recommended'] = $request['is_recommended'] ? 1: 0;

        if (isset($request['perms'])) {
            $perms = str_split($tariff->permissions);
            for ($i = 0; $i < sizeof($perms); $i++) {
                $perms[$i] = 0;
            }

            foreach ($request['perms'] as $key => $perm_id) {
                $perms[$perm_id] = 1;
            }
            $request['permissions'] = strrev(implode('', $perms));
        }

        $tariff->update($request);
        $tariff->save();
        return redirect()->route('admin.tariffs.edit', $tariff);
    }

    public function destroy(int $tariffId)
    {
        $status = Tariff::findOrFail($tariffId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.tariffs.index');
    }
}
