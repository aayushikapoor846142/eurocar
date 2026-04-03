@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')

@section('action_button')
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Back to Posts</span>
    </a>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Edit Blog Post</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                 id="content" name="content" rows="10" required>{{ old('content', $blog->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold">Publish</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="publish_date" class="form-label">Publish Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('publish_date') is-invalid @enderror" 
                                       id="publish_date" name="publish_date" 
                                       value="{{ old('publish_date', $blog->publish_date->format('Y-m-d')) }}" required>
                                @error('publish_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="is_published" name="is_published" 
                                           value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_published">
                                        Publish
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Update Post
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold">Featured Image</h6>
                        </div>
                        <div class="card-body">
                            @if($blog->featured_image)
                                <div class="mb-3 text-center">
                                    <img src="{{ asset($blog->featured_image) }}" alt="Featured Image" class="img-fluid mb-2" style="max-height: 150px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remove_featured_image" name="remove_featured_image" value="1">
                                        <label class="form-check-label" for="remove_featured_image">
                                            Remove featured image
                                        </label>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="mb-3">
                                <label for="featured_image" class="form-label">Upload New Image</label>
                                <input type="file" class="form-control @error('featured_image') is-invalid @enderror" 
                                       id="featured_image" name="featured_image" accept="image/*">
                                <div class="form-text">Max size: 2MB. Allowed formats: jpeg, png, jpg, gif, svg</div>
                                @error('featured_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold">Categories & Tags</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                @if($tags->count() > 0)
                                    @foreach($tags as $tag)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" 
                                                   name="tags[]" 
                                                   value="{{ $tag->id }}" 
                                                   id="tag-{{ $tag->id }}"
                                                   {{ in_array($tag->id, old('tags', $blog->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="tag-{{ $tag->id }}">
                                                {{ $tag->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-muted small">No tags available. <a href="{{ route('admin.blog-tags.create') }}">Create one</a></p>
                                @endif
                                @error('tags')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .note-editor.note-frame {
        margin-bottom: 0;
    }
    .note-editor .note-toolbar {
        background-color: #f8f9fc;
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem 0.35rem 0 0;
    }
    .note-editor.note-frame .note-statusbar {
        background-color: #f8f9fc;
        border-top: 1px solid #e3e6f0;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 300,
            placeholder: 'Write your blog post content here...',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endpush