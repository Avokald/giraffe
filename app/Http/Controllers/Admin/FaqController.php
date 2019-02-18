<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::paginate(20);
        return view('admin.pages.faqs.faqs', [
            'faqs' => $faqs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq();
        return view('admin.pages.faqs.faq_edit', [
            'faq' => $faq,
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
        $faq = Faq::create($request->toArray());
        return redirect()->route('admin.faqs.edit', $faq);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(int $faq_id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(int $faq_id)
    {
        $faq = Faq::findOrFail($faq_id);
        return view('admin.pages.faqs.faq_edit', [
            'faq' => $faq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $faq_id)
    {
        $faq = Faq::findOrFail($faq_id);
        $faq->update($request->toArray());
        $faq->save();
        return redirect()->route('admin.faqs.edit', $faq_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq = Faq::findOrFail($faq_id);
        $status = $faq->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.faqs.index');
    }
}
