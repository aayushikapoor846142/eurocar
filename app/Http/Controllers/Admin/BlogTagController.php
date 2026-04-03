<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use App\Http\Requests\Admin\BlogTagRequest;

class BlogTagController extends Controller
{
    public function index()
    {
        $tags = BlogTag::latest()->paginate(10);
        return view('admin.blog-tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.blog-tags.create');
    }

    public function store(BlogTagRequest $request)
    {
        BlogTag::create($request->validated());

        return redirect()->route('admin.blog-tags.index')
            ->with('success', 'Tag created successfully');
    }

    public function edit(BlogTag $blog_tag)
    {
        return view('admin.blog-tags.edit', ['tag' => $blog_tag]);
    }

   public function update(BlogTagRequest $request, BlogTag $blog_tag)
    {
        \Log::info('Updating tag', [
            'id' => $blog_tag->id,
            'request_data' => $request->all()
        ]);

        $blog_tag->update($request->validated());

        \Log::info('Tag updated', ['tag' => $blog_tag->fresh()]);

        return redirect()->route('admin.blog-tags.index')
            ->with('success', 'Tag updated successfully');
    }
    public function destroy(BlogTag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.blog-tags.index')
            ->with('success', 'Tag deleted successfully');
    }
}