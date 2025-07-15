@extends('frontend.layouts.master')
@section('title', 'Contact Us')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4 text-primary text-center">Contact Us</h1>
        <p class="lead mb-5 text-muted text-center">We'd love to hear from you. Get in touch with us anytime.</p>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control p-3" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control p-3" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control p-3" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h5 class="text-primary fw-bold">Our Office</h5>
                <p class="text-muted"><i class="fa fa-map-marker-alt me-2"></i>Kathmandu, Nepal</p>
                <p class="text-muted"><i class="fa fa-phone-alt me-2"></i>+977 915887427</p>
                <p class="text-muted"><i class="fa fa-envelope me-2"></i>vivekanands900@gmail.com</p>
            </div>
        </div>
    </div>
</section>
@endsection
