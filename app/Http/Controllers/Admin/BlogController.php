<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Http\Requests\Admin\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('tags')->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $tags = BlogTag::all();
        return view('admin.blogs.create', compact('tags'));
    }

    // In your BlogController

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'publish_date' => 'required|date',
        'is_published' => 'boolean',
        'featured_image' => 'nullable|image|max:2048',
        'tags' => 'nullable|array',
        'tags.*' => 'exists:blog_tags,id'
    ]);

    // Generate slug from title
    $validated['slug'] = \Illuminate\Support\Str::slug($request->title);
    
    // Set author name to Admin
    $validated['author_name'] = 'Admin';

     if ($request->hasFile('featured_image')) {
    
        $file = $request->file('featured_image');
        $filename = time() . '_' . $file->getClientOriginalName();
    
        $destinationPath = public_path('uploads/blog-images');
    
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }
    
        $file->move($destinationPath, $filename);
    
        $validated['featured_image'] = 'uploads/blog-images/' . $filename;
    }

    $blog = Blog::create($validated);

    // Sync tags if any
    if (isset($validated['tags'])) {
        $blog->tags()->sync($validated['tags']);
    }

    return redirect()->route('admin.blogs.index')
        ->with('success', 'Blog post created successfully');
}
public function update(Request $request, Blog $blog)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'publish_date' => 'required|date',
        'is_published' => 'sometimes|boolean',
        'featured_image' => 'nullable|image|max:2048',
        'tags' => 'nullable|array',
        'tags.*' => 'exists:blog_tags,id'
    ]);

    try {
        \DB::beginTransaction();

        // Update slug only if title changed
        if ($blog->isDirty('title') || !$blog->slug) {
            $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);
        }

        // Handle file upload
     if ($request->hasFile('featured_image')) {

    // Delete old image if exists
    if ($blog->featured_image) {
        $oldPath = public_path($blog->featured_image);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }

    // Upload new image
    $file = $request->file('featured_image');
    $filename = time() . '_' . $file->getClientOriginalName();

    $destinationPath = public_path('uploads/blog-images');

    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0777, true);
    }

    $file->move($destinationPath, $filename);

    // Save path in DB
    $validated['featured_image'] = 'uploads/blog-images/' . $filename;
}
        // Update blog
        $blog->update($validated);

        // Sync tags if any
        if (array_key_exists('tags', $validated)) {
            $blog->tags()->sync($validated['tags']);
        } else {
            // If tags field is not present, detach all
            $blog->tags()->detach();
        }

        \DB::commit();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post updated successfully');

    } catch (\Exception $e) {
        \DB::rollBack();
        \Log::error('Error updating blog post: ' . $e->getMessage());
        
        return back()
            ->withInput()
            ->with('error', 'Error updating blog post. Please try again.');
    }
}
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $tags = BlogTag::all();
        $selectedTags = $blog->tags->pluck('id')->toArray();
        
        return view('admin.blogs.edit', compact('blog', 'tags', 'selectedTags'));
    }


    public function destroy(Blog $blog)
    {
        if ($blog->featured_image) {
            Storage::disk('public')->delete($blog->featured_image);
        }
        
        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog deleted successfully');
    }
}