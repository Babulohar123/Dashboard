@extends('frontend.layouts.app')

@section('content')
<div class="container my-5" style="max-width: 500px;">
    <h2 class="text-center mb-4">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}" required autofocus>
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

        <div class="form-group form-check mb-3">
            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember" class="form-check-label">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>

        <p class="mt-3 text-center">
            Don't have an account? <a href="{{ route('register') }}">Register here</a>
        </p>
    </form>
</div>
@endsection
