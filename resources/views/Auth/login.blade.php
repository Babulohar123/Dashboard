@extends('layouts.app')

@section('title', 'Login - Education Dashboard')

@section('content')
<div class="container-fluid vh-100">
    <div class="row h-100">
        <!-- Left Side - Login Form -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="w-100" style="max-width: 400px;">
                <div class="text-center mb-4">
                    <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                    <h2 class="mb-2">Welcome Back!</h2>
                    <p class="text-muted">Sign in to your education dashboard</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password"
                                   placeholder="Enter your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-lg mb-3">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                    </button>

                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    @endif
                </form>

                <!-- Demo Accounts -->
                <div class="mt-4 p-3 bg-light rounded">
                    <h6 class="mb-2">Demo Accounts:</h6>
                    <small class="text-muted d-block">Admin: admin@school.edu</small>
                    <small class="text-muted d-block">Teacher: teacher@school.edu</small>
                    <small class="text-muted d-block">Parent: parent@school.edu</small>
                    <small class="text-muted d-block">Student: student@school.edu</small>
                    <small class="text-muted d-block">Password: password</small>
                </div>
            </div>
        </div>

        <!-- Right Side - Background -->
        <div class="col-lg-6 d-none d-lg-block position-relative">
            <div class="h-100 bg-gradient-primary d-flex align-items-center justify-content-center text-white"
                 style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="text-center">
                    <i class="fas fa-users fa-5x mb-4 opacity-75"></i>
                    <h3 class="mb-3">Education Performance Dashboard</h3>
                    <p class="lead mb-0">Empowering education through data-driven insights</p>
                    <div class="row mt-5">
                        <div class="col-6 text-center">
                            <i class="fas fa-chart-line fa-2x mb-2"></i>
                            <h6>Track Progress</h6>
                        </div>
                        <div class="col-6 text-center">
                            <i class="fas fa-users fa-2x mb-2"></i>
                            <h6>Manage Users</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        transform: translateY(-1px);
    }
</style>
@endpush