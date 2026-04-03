<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index()
{
    $blogs = Blog::with('tags')
        ->where('is_published', true)
        ->where('publish_date', '<=', now())
        ->orderBy('publish_date', 'desc')
        ->paginate(6);

    // Get a featured post for the banner (most recent published post)
    $featuredPost = Blog::where('is_published', true)
        ->where('publish_date', '<=', now())
        ->orderBy('publish_date', 'desc')
        ->first();

    return view('frontend.blog.index', compact('blogs', 'featuredPost'));
}
public function tag($tag)
{
    $tag = BlogTag::where('slug', $tag)->firstOrFail();
    $blogs = $tag->blogs()
        ->where('is_published', true)
        ->where('publish_date', '<=', now())
        ->orderBy('publish_date', 'desc')
        ->paginate(10);

    return view('frontend.blog.tag', compact('tag', 'blogs'));
}
    public function show($slug)
    {
        $blog = Blog::with('tags')
            ->where('slug', $slug)
            ->where('is_published', true)
            ->where('publish_date', '<=', now())
            ->firstOrFail();

        // Increment view count
        $blog->increment('views_count');

        $recentPosts = Blog::where('is_published', true)
            ->where('id', '!=', $blog->id)
            ->where('publish_date', '<=', now())
            ->orderBy('publish_date', 'desc')
            ->take(3)
            ->get();

        return view('frontend.blog.detail', compact('blog', 'recentPosts'));
    }
}