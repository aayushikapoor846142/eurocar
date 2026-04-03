@extends('admin.layouts.app')

@section('title', 'Cars Management')

@section('action_button')
    <a href="{{ route('admin.cars.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Car
    </a>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Make & Model</th>
                            <th>Category</th>
                            <th>Year</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>
                                <img src="{{ $car->image ? asset('' . $car->image) : 'images/standard-car.png' }}" 
                                     alt="{{ $car->title }}" 
                                     style="width: 50px; height: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $car->title }}</td>
                            <td>{{ $car->make }} {{ $car->model }}</td>
                            <td>
                                <span class="badge bg-info">{{ ucfirst($car->category) }}</span>
                                @if($car->vehicleCategory)
                                    <br><small class="text-muted">{{ $car->vehicleCategory->name }}</small>
                                @endif
                            </td>
                            <td>{{ $car->year }}</td>
                            <td>{{ number_format($car->price, 2) }} €</td>
                            <td>
                                @if($car->is_active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.cars.edit', $car->id) }}" 
                                   class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.cars.destroy', $car->id) }}" 
                                      method="POST" 
                                      style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm btn-danger" 
                                            onclick="return confirm('Are you sure you want to delete this car?')">
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
                {{ $cars->links() }}
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .badge {
        padding: 0.35em 0.65em;
        font-size: 0.75em;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
</style>
@endpush