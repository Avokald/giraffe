<?php

namespace App\Http\Controllers\Web;

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
        return view('web.faqs.layout_archive', [
            'faqs' => $faqs,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        $faq->view_count++;
        $popularFaq = Faq::orderBy('view_count', 'desc')->limit(5)->get();
        $faq->save();
        return view('web.faqs.layout_single', [
            'faq' => $faq,
            'popularFaq' => $popularFaq,
        ]);
    }
}
