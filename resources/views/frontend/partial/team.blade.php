@extends('frontend.layouts.master')
@section('title', 'Our Team')

@section('content')
<section class="py-5 bg-light">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4 text-primary">Meet Our Team</h1>
        <p class="lead mb-5 text-muted">Dedicated professionals driving innovation in education technology.</p>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/team-1.jpg') }}" class="card-img-top rounded-circle" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Bivekanand Thakur</h5>
                        <p class="card-text text-muted">Project Leader</p>
                        <p class="text-muted">Leading the vision of EduDashboard with passion for education.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/team-2.jpg') }}" class="card-img-top rounded-circle" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Member 2</h5>
                        <p class="card-text text-muted">Backend Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/team-3.jpg') }}" class="card-img-top rounded-circle" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Member 3</h5>
                        <p class="card-text text-muted">Frontend Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/team-4.jpg') }}" class="card-img-top rounded-circle" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Member 4</h5>
                        <p class="card-text text-muted">UI/UX Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
