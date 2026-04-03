@extends('admin.layouts.app')

@section('title', 'Add New Car')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Add New Car</h6>
                <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @include('admin.cars._form')
                </form>
            </div>
        </div>
    </div>
@endsection