@extends('admin.layouts.app')

@section('title', 'Enquiry Details')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Enquiry #{{ $carEnquiry->id }}</h6>
        <a href="{{ route('admin.car-enquiries.index') }}" class="btn btn-sm btn-secondary">Back</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Customer Information</h5>
                <table class="table">
                    <tr><th>Name:</th><td>{{ $carEnquiry->name }}</td></tr>
                    <tr><th>Email:</th><td>{{ $carEnquiry->email }}</td></tr>
                    <tr><th>Phone:</th><td>{{ $carEnquiry->phone }}</td></tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5>Trip Details</h5>
                <table class="table">
                    <tr><th>Car:</th><td>{{ $carEnquiry->car->title ?? 'N/A' }}</td></tr>
                    <tr><th>Pickup:</th><td>{{ $carEnquiry->pickup_location }}</td></tr>
                    <tr><th>Dropoff:</th><td>{{ $carEnquiry->dropoff_location }}</td></tr>
                    <tr><th>Date:</th><td>{{ $carEnquiry->pickup_date ? $carEnquiry->pickup_date->format('Y-m-d') : 'N/A' }}</td></tr>
                    <tr><th>Time:</th><td>{{ $carEnquiry->pickup_time }}</td></tr>
                    <tr><th>Adults:</th><td>{{ $carEnquiry->adults }}</td></tr>
                    <tr><th>Children:</th><td>{{ $carEnquiry->children }}</td></tr>
                </table>
            </div>
        </div>
        
        @if($carEnquiry->message)
        <div class="row mt-3">
            <div class="col-12">
                <h5>Message</h5>
                <p>{{ $carEnquiry->message }}</p>
            </div>
        </div>
        @endif
        
        <div class="row mt-3">
            <div class="col-12">
                <h5>Update Status</h5>
                <form action="{{ route('admin.car-enquiries.update-status', $carEnquiry->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <select name="status" class="form-control" onchange="this.form.submit()">
                            <option value="pending" {{ $carEnquiry->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="contacted" {{ $carEnquiry->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="converted" {{ $carEnquiry->status == 'converted' ? 'selected' : '' }}>Converted</option>
                            <option value="cancelled" {{ $carEnquiry->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
