@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Edit Country: {{ $country->name }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.countries.update', $country) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $country->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="code" class="form-label">Country Code (3 letters) *</label>
                                <input type="text" class="form-control text-uppercase @error('code') is-invalid @enderror" 
                                       id="code" name="code" value="{{ old('code', $country->code) }}" 
                                       maxlength="3" required>
                                <small class="form-text text-muted">e.g., USA, CAN, GBR</small>
                                @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone_code" class="form-label">Phone Code *</label>
                                <input type="text" class="form-control @error('phone_code') is-invalid @enderror" 
                                       id="phone_code" name="phone_code" 
                                       value="{{ old('phone_code', $country->phone_code) }}" required>
                                <small class="form-text text-muted">e.g., 1, 44, 91</small>
                                @error('phone_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_active" 
                               name="is_active" value="1" 
                               {{ old('is_active', $country->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.countries.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection