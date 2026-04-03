@extends('admin.layouts.app')

@section('title', 'Edit Blog Tag: ' . $tag->name)

@section('action_button')
    <a href="{{ route('admin.blog-tags.index') }}" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Back to Tags</span>
    </a>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Edit Blog Tag: {{ $tag->name }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.blog-tags.update', ['blog_tag' => $tag]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tag Name <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               id="name" 
                               name="name" 
                               value="{{ old('name', $tag->name) }}" 
                               required
                               placeholder="Enter tag name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" 
                               class="form-control @error('slug') is-invalid @enderror" 
                               id="slug" 
                               name="slug" 
                               value="{{ old('slug', $tag->slug) }}"
                               placeholder="tag-slug">
                        <small class="form-text text-muted">The slug is auto-generated but can be customized</small>
                        @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Publish</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <p class="small mb-1">Created: {{ $tag->created_at->format('M d, Y') }}</p>
                                <p class="small mb-0">Last Updated: {{ $tag->updated_at->format('M d, Y') }}</p>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update Tag
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-generate slug from name
    document.getElementById('name').addEventListener('input', function() {
        const name = this.value;
        const slugInput = document.getElementById('slug');
        
        // Only update slug if it's empty or matches the current tag's slug
        if (!slugInput.dataset.manuallySet) {
            const slug = name.toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                .replace(/\s+/g, '-')         // Replace spaces with -
                .replace(/-+/g, '-')          // Replace multiple - with single -
                .trim();
            slugInput.value = slug;
        }
    });

    // Mark slug as manually modified when user types in it
    document.getElementById('slug').addEventListener('input', function() {
        this.dataset.manuallySet = 'true';
    });
</script>
@endpush