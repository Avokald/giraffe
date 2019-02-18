<?php

namespace App\Http\Controllers\Web;

use App\BlogPost;
use App\Tag;
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
        $blogposts = BlogPost::paginate(5);
        $allTags = Tag::all();
        $latestBlogposts = BlogPost::latest()->limit(3)->get();
        $popularBlogposts = BlogPost::orderBy('view_count', 'desc')->take(3)->get();
        return view('web.blog.layout_archive', [
            'blogposts' => $blogposts,
            'allTags' => $allTags,
            'latestBlogposts' => $latestBlogposts,
            'popularBlogposts' => $popularBlogposts,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $blogPost_id
     * @return array
     */
    public function show(string $blogPostSlug)
    {
        $blogpost = BlogPost::with('tags')->where('slug', '=', $blogPostSlug)->firstOrFail();
        $latestBlogposts = BlogPost::latest()->limit(3)->get();
        $popularBlogposts = BlogPost::orderBy('view_count', 'desc')->take(3)->get();
        $blogpost->view_count++;
        $blogpost->save();
        return view('web.blog.layout_single', [
            'blogpost' => $blogpost,
            'latestBlogposts' => $latestBlogposts,
            'popularBlogposts' => $popularBlogposts,
        ]);
    }
}
