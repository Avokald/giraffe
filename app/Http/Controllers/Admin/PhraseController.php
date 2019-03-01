<?php

namespace App\Http\Controllers\Admin;

use App\Phrase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhraseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phrases = Phrase::paginate(20);
        return view('admin.pages.phrases.phrases', [
            'phrases' => $phrases,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phrase = new Phrase();
        return view('admin.pages.phrases.phrase_edit', [
            'phrase' => $phrase,
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
        $phrase = Phrase::create($request->toArray());

        return redirect()->route('admin.phrases.edit', $phrase->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phrase  $phrase
     * @return \Illuminate\Http\Response
     */
    public function edit(int $phraseId)
    {
        $phrase = Phrase::findOrFail($phraseId);
        return view('admin.pages.phrases.phrase_edit', [
            'phrase' => $phrase,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phrase  $phrase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $phraseId)
    {
        $phrase = Phrase::findOrFail($phraseId);
        $phrase->update($request->toArray());
        $phrase->save();
        return redirect()->route('admin.phrases.edit', $phraseId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phrase  $phrase
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $phraseId)
    {
        $status = Phrase::findOrFail($phraseId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.phrases.index');
    }
}
