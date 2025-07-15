@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-center text-white" style="background: linear-gradient(90deg, #007bff, #00c6ff); min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <h1 class="display-3 fw-bolder mb-4">Welcome to EduDashboard</h1>
        <p class="lead fs-4 mb-5">
            Smart Monitoring • Real-Time Insights • Parental Engagement
        </p>
        <a href="{{ url('about') }}" class="btn btn-light btn-lg fw-bold px-4 py-3 rounded-pill shadow-sm">
            Learn More
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bolder text-primary">Our Key Features</h2>
            <p class="fs-5 text-muted">Powerful tools to help parents stay involved in their child's academic journey.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold text-primary">Real-Time Tracking</h5>
                        <p class="text-muted">Monitor attendance, grades, and performance live from anywhere.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-user-friends fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold text-primary">Parent-Teacher Bridge</h5>
                        <p class="text-muted">Stay connected with teachers and get regular updates about your child.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-bell fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold text-primary">Alerts & Reminders</h5>
                        <p class="text-muted">Get notified about exams, events, and important colledge announcements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg border-0 rounded-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-lock fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold text-primary">Secure Platform</h5>
                        <p class="text-muted">We protect your data with advanced security protocols.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
