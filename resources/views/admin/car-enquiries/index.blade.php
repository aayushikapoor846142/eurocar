@extends('admin.layouts.app')

@section('title', 'Car Enquiries')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Car Enquiries</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Car</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Pickup Date</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enquiries as $enquiry)
                    <tr>
                        <td>{{ $enquiry->id }}</td>
                        <td>{{ $enquiry->car->title ?? 'N/A' }}</td>
                        <td>{{ $enquiry->name }}</td>
                        <td>{{ $enquiry->email }}</td>
                        <td>{{ $enquiry->phone }}</td>
                        <td>{{ $enquiry->pickup_date ? $enquiry->pickup_date->format('Y-m-d') : 'N/A' }}</td>
                        <td>
                            <span class="badge bg-{{ $enquiry->status == 'pending' ? 'warning' : ($enquiry->status == 'contacted' ? 'info' : ($enquiry->status == 'converted' ? 'success' : 'secondary')) }}">
                                {{ ucfirst($enquiry->status) }}
                            </span>
                        </td>
                        <td>{{ $enquiry->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.car-enquiries.show', $enquiry->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <form action="{{ route('admin.car-enquiries.destroy', $enquiry->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this enquiry?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $enquiries->links() }}
        </div>
    </div>
</div>
@endsection
