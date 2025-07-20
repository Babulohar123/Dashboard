@extends('frontend.layouts.app')

@section('content')
<div class="container my-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Register</h2>
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
        <div class="form-group mb-3">
            <label for="role">Register As</label>
            <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" required>
                <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                <option value="parent" {{ old('role') == 'parent' ? 'selected' : '' }}>Parent</option>
                <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name') }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" 
                class="form-control @error('password') is-invalid @enderror" 
                required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="photo">Profile Photo (optional)</label>
            <input id="photo" type="file" name="photo" 
                class="form-control-file @error('photo') is-invalid @enderror">
            @error('photo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success w-100">Register</button>

        <p class="mt-3 text-center">
            Already have an account? <a href="{{ route('login') }}">Login here</a>
        </p>
    </form>
</div>
@endsection
