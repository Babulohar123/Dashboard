@extends('backend.layouts.master')
@section('content')
<div class="container mt-4">
    <h2>Parents List</h2>
    <a href="{{ route('parents.create') }}" class="btn btn-success mb-2">Add Parent</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach($parents as $parent)
        <tr>
            <td>{{ $parent->id }}</td>
            <td>{{ $parent->name }}</td>
            <td>{{ $parent->email }}</td>
            <td>{{ $parent->phone }}</td>
            <td>
                <a href="{{ route('parents.edit', $parent->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('parents.destroy', $parent->id) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
