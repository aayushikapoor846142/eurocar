@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h3 mb-0">Message Details</h1>
                <div>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Back to Messages
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="mb-3">From:</h5>
                    <p class="mb-1"><strong>Name:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
                    <p class="mb-1"><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                    <p class="mb-1"><strong>Phone:</strong> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                    <p class="mb-0"><strong>Date:</strong> {{ $contact->created_at->format('F j, Y, g:i a') }}</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="btn-group">
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" 
                              method="POST" 
                              class="d-inline"
                              onsubmit="return confirm('Are you sure you want to delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-1"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="border-top pt-4">
                <h5 class="mb-3">Message:</h5>
                <div class="p-3 bg-light rounded">
                    {!! nl2br(e($contact->message)) !!}
                </div>
            </div>

            {{-- Reply button removed as per request --}}
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Mark as read when the page loads if it's unread
    @if(!$contact->is_read)
        document.addEventListener('DOMContentLoaded', function() {
            fetch('{{ route("admin.contacts.mark-as-read", $contact) }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({})
            });
        });
    @endif
</script>
@endpush
@endsection
