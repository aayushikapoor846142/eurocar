@csrf

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $car->title ?? '') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="make">Make</label>
            <input type="text" name="make" id="make" class="form-control" value="{{ old('make', $car->make ?? '') }}" required>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $car->model ?? '') }}" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" id="year" class="form-control" min="1900" max="{{ date('Y') + 1 }}" value="{{ old('year', $car->year ?? date('Y')) }}" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="price">Price (€)</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price', $car->price ?? '') }}" required>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="discount">Discount (€)</label>
            <input type="number" step="0.01" name="discount" id="discount" class="form-control" value="{{ old('discount', $car->discount ?? 0) }}">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="driver_language">Driver Language</label>
            <input type="text" name="driver_language" id="driver_language" class="form-control" value="{{ old('driver_language', $car->driver_language ?? 'English') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            @if(isset($car) && $car->image)
                <img src="{{ asset('' . $car->image) }}" alt="{{ $car->title }}" class="img-thumbnail mt-2" style="max-height: 100px;">
            @endif
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $car->description ?? '') }}</textarea>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="category">Trip Type</label>
            <select name="category" id="category" class="form-control" required>
                <option value="">Select Trip Type</option>
                <option value="transfer" {{ old('category', $car->category ?? '') == 'transfer' ? 'selected' : '' }}>Transfer</option>
                <option value="daytrip" {{ old('category', $car->category ?? '') == 'daytrip' ? 'selected' : '' }}>Day Trip</option>
                <option value="multidaytrip" {{ old('category', $car->category ?? '') == 'multidaytrip' ? 'selected' : '' }}>Multiday Trip</option>
                <option value="hourly" {{ old('category', $car->category ?? '') == 'hourly' ? 'selected' : '' }}>Hourly Rental</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="vehicle_category_id">Vehicle Category</label>
            <select name="vehicle_category_id" id="vehicle_category_id" class="form-control">
                <option value="">Select Vehicle Category (Optional)</option>
                @foreach($vehicleCategories as $category)
                    <option value="{{ $category->id }}" 
                        {{ old('vehicle_category_id', $car->vehicle_category_id ?? '') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }} - {{ $category->vehicle_example }} ({{ $category->max_passengers }}pax)
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">Links this car to a vehicle category with passenger/luggage specs</small>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="form-check">
            <input type="hidden" name="is_featured" value="0">
            <input type="checkbox" class="form-check-input" name="is_featured" id="is_featured" value="1" {{ (old('is_featured', $car->is_featured ?? false) ? 'checked' : '') }}>
            <label class="form-check-label" for="is_featured">Featured</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-check">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" class="form-check-input" name="is_active" id="is_active" value="1" {{ (old('is_active', $car->is_active ?? true) ? 'checked' : '') }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>