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
        $blogposts = BlogPost::all();
        dd($blogposts);
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
        return view('admin.pages.blog.blogpost_edit', ['blogpost' => $blogpost]);
    }

    public function store(Request $request)
    {
        $request = $request->toArray();
        $request['author_id'] = Auth::user()->id;
        $blogpost = BlogPost::create($request);
        return redirect()->route('admin.blog.edit', ['blogpost' => $blogpost]);
    }

    public function edit($blogpost_id)
    {
        $blogpost = BlogPost::with('tags')->findOrFail($blogpost_id);
        $all_tags = \App\Tag::all()->toArray();
        return view('admin.pages.blog.blogpost_edit', ['blogpost' => $blogpost, 'all_tags' => $all_tags]);
    }

    public function update(Request $request, int $blogpost_id)
    {
        $blogpost = BlogPost::findOrFail($blogpost_id);
        $requestArray = $request->toArray();
        $blogpost->tags()->sync($requestArray['tags']);
//        if ($requestArray['banner_new']) {
//            $requestArray['banner'] = $requestArray['banner_new'];
//            // TODO Image upload handling
//        }
        $blogpost->update($requestArray);
        $blogpost->save();
        return redirect()->route('admin.blog.edit', ['blogpost' => $blogpost]);
    }

    public function destroy(BlogPost $blogPost)
    {
        return dd($blogPost);
    }
}
