@extends('admin.layouts.app')

@section('title', 'Edit Car: ' . $car->title)

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Edit Car: {{ $car->title }}</h6>
                <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('admin.cars._form')
                </form>
            </div>
        </div>
    </div>
@endsection