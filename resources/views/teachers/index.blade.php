@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h2>Teachers List</h2>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Add New Teacher</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->subject }}</td>
                <td>{{ $teacher->address }}</td>
                <td>
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6">No teachers found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
