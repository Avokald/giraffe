<?php

namespace App\Http\Controllers\Web;

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
        $faqCategories = FaqCategory::with('faqs')->get();
        return view('web.faqs.layout_archive', [
            'faqCategories' => $faqCategories,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(string $faq_slug)
    {
        $faq = Faq::where('slug', $faq_slug)->firstOrFail();
        $faq->view_count++;
        $faq->save();

        $popularFaqs = Faq::orderBy('view_count', 'desc')->limit(5)->get();
        $sameCategoryFaqs = $faq->faqCategory->faqs;

        return view('web.faqs.layout_single', [
            'faq' => $faq,
            'popularFaqs' => $popularFaqs,
            'sameCategoryFaqs' => $sameCategoryFaqs,
        ]);
    }
}
