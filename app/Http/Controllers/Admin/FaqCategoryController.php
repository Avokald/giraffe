<?php

namespace App\Http\Controllers\Admin;

use App\FaqCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqCategories = FaqCategory::paginate(30);
        return view('admin.pages.faqCategories.faq_categories', [
            'faqCategories' => $faqCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqCategory = new FaqCategory();
        return view('admin.pages.faqCategories.faq_category_edit', [
            'faqCategory' => $faqCategory,
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
        $faqCategory = FaqCategory::create($request->toArray());
        return redirect()->route('admin.faq-categories.edit', [
            'faqCategory' => $faqCategory,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $faqCategoryId
     * @return \Illuminate\Http\Response
     */
    public function edit(int $faqCategoryId)
    {
        $faqCategory = FaqCategory::findOrFail($faqCategoryId);
        return view('admin.pages.faqCategories.faq_category_edit', [
            'faqCategory' => $faqCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $faqCategoryId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $faqCategoryId)
    {
        $faqCategory = FaqCategory::findOrFail($faqCategoryId);
        $faqCategory->update($request->toArray());
        $faqCategory->save();
        return redirect()->route('admin.faq-categories.edit', $faqCategoryId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $faqCategoryId
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $faqCategoryId)
    {
        $status = FaqCategory::findOrFail($faqCategoryId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.faq-categories.index');
    }
}
