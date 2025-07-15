<div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
    <div class="container mt-5 pt-5">
        <div class="row">
            <!-- Brand & Description -->
            <div class="col-md-6 mb-5">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="mt-n2 text-uppercase text-white">
                        <i class="fa fa-book-reader mr-3"></i>EduDashboard
                    </h1>
                </a>
                <p class="m-0">
                    Empowering parents and connecting colleges with real-time academic performance insights.
                    Your partner in tracking attendance, grades, and behavior effortlessly.
                </p>
            </div>

            <!-- Newsletter Signup -->
            <div class="col-md-6 mb-5">
                <h3 class="text-white mb-4">Stay Updated</h3>
                <div class="w-100">
                    <form action="#" method="POST" class="d-flex">
                        <input type="email" name="email" class="form-control border-light p-3" placeholder="Your Email Address" required>
                        <button type="submit" class="btn btn-primary px-4 ms-2">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-4 mb-5">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p><i class="fa fa-map-marker-alt me-2"></i>Kathmandu, Nepal</p>
                <p><i class="fa fa-phone-alt me-2"></i>+977 915887427</p>
                <p><i class="fa fa-envelope me-2"></i>vivekanands900@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <!-- Only Facebook -->
                    <a class="text-white me-4" href="https://www.facebook.com/bivekanand.thakue" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                </div>
            </div>

            <!-- Features or Services -->
            <div class="col-md-4 mb-5">
                <h3 class="text-white mb-4">Our Features</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Real-Time Performance Tracking</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Attendance Monitoring</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Behavior Insights</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Exam & Event Alerts</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Secure & Private</a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-5">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{ url('home') }}"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="{{ url('about') }}"><i class="fa fa-angle-right me-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="{{ url('courses') }}"><i class="fa fa-angle-right me-2"></i>Courses</a>
                    <a class="text-white-50 mb-2" href="{{ url('team') }}"><i class="fa fa-angle-right me-2"></i>Team</a>
                    <a class="text-white-50" href="{{ url('contact') }}"><i class="fa fa-angle-right me-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Bar -->
<div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(255, 255, 255, 0.1) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="m-0">© 2025 EduDashboard. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
