@extends('frontend.layouts.master')
@section('title', 'Courses')

@section('content')
<section class="py-5 bg-light">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-4 text-primary">Our Courses</h1>
        <p class="lead mb-5 text-muted">Explore a variety of courses to empower your child's education.</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/courses-1.jpg') }}" class="card-img-top" alt="Course 1">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Mathematics Mastery</h5>
                        <p class="card-text">Build a strong foundation in Math with expert guidance and real-time tracking.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/courses-2.jpg') }}" class="card-img-top" alt="Course 2">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Science Explorer</h5>
                        <p class="card-text">Hands-on learning for curious minds. Monitor performance easily.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow rounded-4">
                    <img src="{{ asset('frontend/img/courses-3.jpg') }}" class="card-img-top" alt="Course 3">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Language Skills</h5>
                        <p class="card-text">Enhance communication skills with personalized feedback and insights.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
