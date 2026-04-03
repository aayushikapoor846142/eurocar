@extends('admin.layouts.app')

@section('title', $blog->title)

@section('action_button')
    <div class="d-flex">
        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-primary btn-icon-split me-2">
            <span class="icon text-white-50">
                <i class="fas fa-edit"></i>
            </span>
            <span class="text">Edit Post</span>
        </a>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back to Posts</span>
        </a>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post Details</h6>
            </div>
            <div class="card-body">
                <h1 class="h3 mb-4">{{ $blog->title }}</h1>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center me-4">
                        <i class="fas fa-user me-2 text-gray-500"></i>
                        <span>{{ $blog->author_name }}</span>
                    </div>
                    <div class="d-flex align-items-center me-4">
                        <i class="far fa-calendar-alt me-2 text-gray-500"></i>
                        <span>{{ $blog->publish_date->format('F d, Y') }}</span>
                    </div>
                    <div>
                        <span class="badge {{ $blog->is_published ? 'bg-success' : 'bg-secondary' }}">
                            {{ $blog->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>
                </div>

                @if($blog->featured_image)
                <div class="text-center mb-4">
                    <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                </div>
                @endif

                <div class="blog-content">
                    {!! $blog->content !!}
                </div>

                @if($blog->tags->count() > 0)
                <div class="mt-4 pt-3 border-top">
                    <h6 class="text-muted mb-2">Tags:</h6>
                    <div>
                        @foreach($blog->tags as $tag)
                            <span class="badge bg-primary me-1">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post Information</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h6 class="text-muted mb-1">Created At</h6>
                    <p class="mb-0">{{ $blog->created_at->format('F d, Y') }}</p>
                </div>
                <div class="mb-3">
                    <h6 class="text-muted mb-1">Last Updated</h6>
                    <p class="mb-0">{{ $blog->updated_at->format('F d, Y') }}</p>
                </div>
                <div class="mb-3">
                    <h6 class="text-muted mb-1">Status</h6>
                    <p class="mb-0">
                        <span class="badge {{ $blog->is_published ? 'bg-success' : 'bg-secondary' }}">
                            {{ $blog->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </p>
                </div>
                @if($blog->meta_title || $blog->meta_description)
                <div class="mb-3">
                    <h6 class="text-muted mb-1">SEO Information</h6>
                    @if($blog->meta_title)
                        <p class="mb-1"><strong>Meta Title:</strong> {{ $blog->meta_title }}</p>
                    @endif
                    @if($blog->meta_description)
                        <p class="mb-0"><strong>Meta Description:</strong> {{ $blog->meta_description }}</p>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .blog-content {
        line-height: 1.8;
    }
    .blog-content img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
        border-radius: 4px;
    }
    .blog-content h2, 
    .blog-content h3, 
    .blog-content h4 {
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    .blog-content p {
        margin-bottom: 1.2rem;
    }
    .blog-content ul, 
    .blog-content ol {
        margin-bottom: 1.2rem;
        padding-left: 1.5rem;
    }
</style>
@endpush