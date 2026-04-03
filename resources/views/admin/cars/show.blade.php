@extends('admin.layouts.app')

@section('title', 'Car Details: ' . $car->title)

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Car Details: {{ $car->title }}</h6>
                <div>
                    <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ $car->image ? asset('storage/' . $car->image) : 'images/standard-car.png' }}" 
                                 class="card-img-top" alt="{{ $car->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $car->title }}</h5>
                                <p class="card-text">{{ $car->make }} {{ $car->model }}, {{ $car->year }}</p>
                                <p class="card-text">{{ $car->description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>Seats:</strong> {{ $car->seats }} + 1 driver
                                </li>
                                <li class="list-group-item">
                                    <strong>Luggage:</strong> {{ $car->luggage }} pcs
                                </li>
                                <li class="list-group-item">
                                    <strong>Driver Language:</strong> {{ $car->driver_language }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Price:</strong> {{ number_format($car->price, 2) }} €
                                    @if($car->discount > 0)
                                        <br><strong>Discount:</strong> -{{ number_format($car->discount, 2) }} €
                                        <br><strong>Final Price:</strong> {{ number_format($car->final_price, 2) }} €
                                    @endif
                                </li>
                                <li class="list-group-item">
                                    <strong>Status:</strong>
                                    @if($car->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Inactive</span>
                                    @endif
                                    @if($car->is_featured)
                                        <span class="badge bg-primary ms-2">Featured</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- Additional details or related content can go here -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Car Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Make</th>
                                            <td>{{ $car->make }}</td>
                                        </tr>
                                        <tr>
                                            <th>Model</th>
                                            <td>{{ $car->model }}</td>
                                        </tr>
                                        <tr>
                                            <th>Year</th>
                                            <td>{{ $car->year }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $car->created_at->format('M d, Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated At</th>
                                            <td>{{ $car->updated_at->format('M d, Y H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection