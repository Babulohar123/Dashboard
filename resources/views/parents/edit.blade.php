@extends('backend.layouts.master')
@section('content')

<div class="container mt-4">
    <h2>Edit Parent</h2>
    <form action="{{ route('parents.update', $parent->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $parent->name }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $parent->email }}" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $parent->phone }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
