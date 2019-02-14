<?php

namespace App\Http\Controllers\Admin;

use App\BlogPost;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


/**
 * Class BlogPostController
 * @package App\Http\Controllers\Admin
 */
class BlogPostController extends Controller
{

    public function index()
    {
        $blogposts = BlogPost::paginate(10);
        return view('admin.pages.blog.blogposts', [
            'blogposts' => $blogposts,
        ]);
    }

    /**
     *
     * @param BlogPost $blogPost
     *
     */
    public function show(BlogPost $blogPost)
    {
        return dd($blogPost);
    }

    public function create()
    {
        $blogpost = new BlogPost();
        $allTags = \App\Tag::all()->toArray();
        return view('admin.pages.blog.blogpost_edit', [
            'blogpost' => $blogpost,
            'allTags' => $allTags,
        ]);
    }

    public function store(Request $request)
    {
        $request = $request->toArray();
        $request['author_id'] = Auth::user()->id; // TODO set user

        $blogpost = BlogPost::create($request);

        $blogpost->relationshipsSave($request);

        return redirect()->route('admin.blog.edit', ['blogpost' => $blogpost]);
    }

    public function edit($blogpost_id)
    {
        $blogpost = BlogPost::with('tags')->findOrFail($blogpost_id);
        $allTags = \App\Tag::all()->toArray();
        return view('admin.pages.blog.blogpost_edit', [
            'blogpost' => $blogpost,
            'allTags' => $allTags,
        ]);
    }

    public function update(Request $request, int $blogpost_id)
    {
        $blogpost = BlogPost::findOrFail($blogpost_id);
        $blogpost->mainUpdate($request->toArray());
        return redirect()->route('admin.blog.edit', ['blogpost' => $blogpost]);
    }

    public function destroy(BlogPost $blogPost)
    {
        return dd($blogPost);
    }
}
