@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label><input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label><input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="teacher" {{ $user->role == 'teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="parent" {{ $user->role == 'parent' ? 'selected' : '' }}>Parent</option>
                <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Student</option>
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
