@php
    $isEdit = isset($blog) && $blog->exists;
    $route = $isEdit ? route('admin.blogs.update', $blog) : route('admin.blogs.store');
    $method = $isEdit ? 'PUT' : 'POST';
@endphp
@php
    $isEdit = isset($blog) && $blog->exists;
    $route = $isEdit ? route('admin.blogs.update', $blog) : route('admin.blogs.store');
    $method = $isEdit ? 'PUT' : 'POST';
    
    // Fix for null publish_date
    $publishDate = old('publish_date', 
        $blog->publish_date ? $blog->publish_date->format('Y-m-d') : now()->format('Y-m-d')
    );
@endphp

<form method="POST" action="{{ $route }}" enctype="multipart/form-data">
    @csrf
    @method($method)

    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                       id="title" name="title" value="{{ old('title', $blog->title ?? '') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Rest of your form fields -->
            
            <div class="mb-3">
                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                <textarea class="form-control @error('content') is-invalid @enderror" 
                          id="content" name="content" rows="10" required>{{ old('content', $blog->content ?? '') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    Publish
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="publish_date" class="form-label">Publish Date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('publish_date') is-invalid @enderror" 
                               id="publish_date" name="publish_date" 
                               value="{{ $publishDate }}" required>
                        @error('publish_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Rest of your form fields -->
                </div>
            </div>
        </div>
    </div>
</form>
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    // Auto-generate slug from title
    document.getElementById('title').addEventListener('input', function() {
        const slug = this.value
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)/g, '');
        document.getElementById('slug').value = slug;
    });

    // Initialize summernote
    $(document).ready(function() {
        $('#content').summernote({
            height: 300,
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