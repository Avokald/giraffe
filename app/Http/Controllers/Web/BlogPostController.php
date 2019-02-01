<?php

namespace App\Http\Controllers\Web;

use App\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = BlogPost::all();
        dd($blogposts);
        return view('web.blog.archive_layout', ['blogposts' => $blogposts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $blogPost_id
     * @return array
     */
    public function show(int $blogPost_id)
    {
        $blogpost = BlogPost::findOrFail($blogPost_id);
        $blogpost->view_count++;
        $blogpost->save();
        dd($blogpost);
        return view('web.blog.layout', ['blogpost' => $blogpost]);
    }
}
