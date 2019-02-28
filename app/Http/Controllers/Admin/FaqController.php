<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\FaqCategory;
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
        $allFaqCategories = FaqCategory::all();
        return view('admin.pages.faqs.faq_edit', [
            'faq' => $faq,
            'allFaqCategories' => $allFaqCategories,
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
        return redirect()->route('admin.faqs.edit', $faq->id);
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
        $allFaqCategories = FaqCategory::all();
        return view('admin.pages.faqs.faq_edit', [
            'faq' => $faq,
            'allFaqCategories' => $allFaqCategories,
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
    public function destroy(int $faq_id)
    {
        $faq = Faq::findOrFail($faq_id);
        $status = $faq->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.faqs.index');
    }
}
