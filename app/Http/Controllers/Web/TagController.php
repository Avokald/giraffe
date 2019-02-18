<?php

namespace App\Http\Controllers\Web;

use \App\Tag;
use \App\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function show(string $tagSlug)
    {
        $tag = Tag::where('slug', $tagSlug)->firstOrFail();
        $allTags = Tag::all();
        $latestBlogposts = BlogPost::latest()->limit(3)->get();
        $popularBlogposts = BlogPost::orderBy('view_count', 'desc')->take(3)->get();
        return view('web.blog.layout_archive', [
            'blogposts' => $tag->blogposts()->paginate(10),
            'allTags' => $allTags,
            'latestBlogposts' => $latestBlogposts,
            'popularBlogposts' => $popularBlogposts,
        ]);
    }
}
