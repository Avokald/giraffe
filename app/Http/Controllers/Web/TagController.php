<?php

namespace App\Http\Controllers\Web;

use \App\Tag;
use \App\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    { // TODO
        $blogposts = BlogPost::paginate(5);
        dd($blogposts);
        return view('web.home');
    }

    public function show(string $tagSlug)
    { // TODO
        $tag = Tag::where('slug', $tagSlug)->first();
        dd($tag);
        $blogposts = BlogPost::with('tags')->where('tags', $tag->id); // TODO where clause for filtering
    }
}
