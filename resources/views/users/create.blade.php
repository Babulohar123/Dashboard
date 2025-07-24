@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label><input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label><input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label><input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="admin">Admin</option>
                <option value="teacher">Teacher</option>
                <option value="parent">Parent</option>
                <option value="student">Student</option>
            </select>
        </div>
        <button class="btn btn-success">Create</button>
    </form>
</div>
@endsection
