<?php

namespace App\Http\Controllers\Web;

use App\Page;
use \App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        dd($page);
        return view(${$page->template}, ['page' => $page]);
    }
}
