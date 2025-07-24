@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h2>Edit Teacher</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $teacher->phone) }}">
        </div>

        <div class="mb-3">
            <label>Subject</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject', $teacher->subject) }}">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ old('address', $teacher->address) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
