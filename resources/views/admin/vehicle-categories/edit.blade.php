@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Vehicle Category</h1>
        <a href="{{ route('admin.vehicle-categories.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.vehicle-categories.update', $vehicleCategory) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Category Name *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $vehicleCategory->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="vehicle_example" class="form-label">Vehicle Example</label>
                        <input type="text" class="form-control @error('vehicle_example') is-invalid @enderror" 
                               id="vehicle_example" name="vehicle_example" 
                               value="{{ old('vehicle_example', $vehicleCategory->vehicle_example) }}"
                               placeholder="e.g., Škoda Octavia Combi or similar">
                        @error('vehicle_example')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="max_passengers" class="form-label">Max Passengers *</label>
                        <input type="number" class="form-control @error('max_passengers') is-invalid @enderror" 
                               id="max_passengers" name="max_passengers" 
                               value="{{ old('max_passengers', $vehicleCategory->max_passengers) }}" 
                               min="1" required>
                        @error('max_passengers')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="max_big_bags" class="form-label">Max Big Bags *</label>
                        <input type="number" class="form-control @error('max_big_bags') is-invalid @enderror" 
                               id="max_big_bags" name="max_big_bags" 
                               value="{{ old('max_big_bags', $vehicleCategory->max_big_bags) }}" 
                               min="0" required>
                        @error('max_big_bags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="max_small_bags" class="form-label">Max Small Bags *</label>
                        <input type="number" class="form-control @error('max_small_bags') is-invalid @enderror" 
                               id="max_small_bags" name="max_small_bags" 
                               value="{{ old('max_small_bags', $vehicleCategory->max_small_bags) }}" 
                               min="0" required>
                        @error('max_small_bags')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="sort_order" class="form-label">Sort Order</label>
                        <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                               id="sort_order" name="sort_order" 
                               value="{{ old('sort_order', $vehicleCategory->sort_order) }}">
                        @error('sort_order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="is_active" class="form-label">Status</label>
                        <select class="form-select @error('is_active') is-invalid @enderror" 
                                id="is_active" name="is_active">
                            <option value="1" {{ old('is_active', $vehicleCategory->is_active) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('is_active', $vehicleCategory->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('is_active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="3">{{ old('description', $vehicleCategory->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.vehicle-categories.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
