<?php

namespace App\Http\Controllers\Web;

use App\Page;
use \App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display front page
     */
    public function frontpage()
    {
        $page = Page::where('slug', 'frontpage')->firstOrFail();

        $best_services = \App\Service::with(['tariffs', 'logo'])->limit(12)->get();
        $best_compilations = \App\ServiceCompilation::with(['logo'])->limit(12)->get();
        $allCategories = \App\Category::with(['logo']);
        return view($page->template, [
            'page' => $page,
            'best_services' => $best_services,
            'best_compilations' => $best_compilations,
            'allCategories' => $allCategories,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  string $pageSlug
     * @return \Illuminate\Http\Response
     */
    public function show(string $pageSlug)
    {
        if ($pageSlug === 'frontpage') {
            abort(404);
        }
        $page = Page::where('slug', $pageSlug)->firstOrFail();
        $phrases = \App\Phrase::all();

        return view($page->template, [
            'page' => $page,
        ]);
    }
}
