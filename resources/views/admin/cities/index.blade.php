@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-4">
            <h5>Cities</h5>
            <a href="{{ route('admin.cities.create') }}" class="btn btn-primary">Add New City</a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->state ?? 'N/A' }}</td>
                                    <td>{{ $city->country }}</td>
                                    <td>
                                        <span class="badge {{ $city->is_active ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $city->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.cities.edit', $city) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.cities.destroy', $city) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $cities->links() }}
            </div>
        </div>
    </div>
@endsection