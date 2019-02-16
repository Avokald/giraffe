<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use \App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        dd($tags);
        return view('admin.pages.tags.tags', $tags);
    }

    public function create()
    {
        $tag = new Tag();
        return view('admin.pages.tags.tag_edit', ['tag' => $tag]);
    }

    public function store(Request $request)
    {
        $tag = Tag::create($request->toArray());
        return redirect()->route('admin.tags.edit', $tag);
    }

    public function edit(Tag $tag)
    {
//        $tag = Tag::findOrFail($tag_id);
        return view('admin.pages.tags.tag_edit', ['tag' => $tag]);
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->toArray());
        $tag->save();
        return redirect()->route('admin.tags.edit', $tag);
    }

    public function destroy(int $tagId)
    {
        $status = Tag::findOrFail($tagId)->delete();
        session()->flash('status', $status);
        return redirect()->route('admin.tags.index');
    }
}
