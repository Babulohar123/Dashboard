@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('content')
<!-- About Us Start -->
<div class="about-page">
    <!-- Hero Section with Video Background -->
    <section class="position-relative" style="height: 100vh; overflow: hidden;">
        <!-- Video Background -->
        <video autoplay muted loop playsinline
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
            <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark Overlay & Text -->
        <div style="background-color: rgba(0, 0, 0, 0.5); height: 100%; display: flex; align-items: center;">
            <div class="container text-center text-white">
                <h1 class="display-3 fw-bolder mb-4">About EduDashboard</h1>
                <p class="lead fs-4 mb-5">
                    Empowering Parents • Inspiring Students • Connecting Colleges
                </p>
                <a href="#about" class="btn btn-light btn-lg fw-bold px-4 py-3 rounded-pill shadow-sm">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="py-5 bg-white" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('frontend/img/about-1.jpg') }}" alt="Who We Are" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder text-primary mb-3">Who We Are</h2>
                    <p class="fs-5" style="color: #28a745;">
                        Welcome to <strong style="color: #007bff;">EduDashboard</strong> – your trusted partner in guiding and improving your child’s academic journey. 
                        We are not just a team; we are a community of passionate <strong>educators, developers, and parents</strong> who deeply care about 
                        transforming the way parents connect with their children’s education.
                    </p>
                    <p class="fs-5" style="color: #28a745;">
                        Our platform was born out of a simple idea: <em>to make student performance transparent, accessible, and actionable for parents.</em> 
                        We understand how important it is for parents to stay informed about their child’s progress in school. That’s why we built 
                        <strong style="color: #007bff;">EduDashboard</strong> – a smart and easy-to-use solution for monitoring attendance, grades, 
                        and overall performance in real-time.
                    </p>
                    <p class="fs-5" style="color: #28a745;">
                        With our innovative tools and insights, we aim to create a strong bridge between schools and families, ensuring every child 
                        gets the support they need to reach their full potential. Together, we’re shaping a brighter future for education.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('frontend/img/about-2.jpg') }}" alt="Our Mission" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder text-primary mb-3">Our Mission</h2>
                    <p class="fs-5" style="color: #28a745;">
                        At <strong style="color: #007bff;">EduDashboard</strong>, our mission is to empower parents with a 
                        <strong style="color: #007bff;">smart and interactive dashboard</strong> that makes monitoring their child’s academic journey seamless and effective. 
                        We strive to provide a platform that delivers real-time, actionable insights into key areas of a student’s life, helping parents stay involved 
                        and proactive in supporting their child’s growth.
                    </p>
                    <p class="fs-5" style="color: #28a745;">
                        Our dashboard offers comprehensive insights into:
                    </p>
                    <ul class="fs-5" style="color: #28a745;">
                        <li><strong style="color: #007bff;">Academic Performance</strong> – Track grades, subject-wise strengths, and areas for improvement.</li>
                        <li><strong style="color: #007bff;">Attendance Records</strong> – Stay updated with detailed attendance reports and trends.</li>
                        <li><strong style="color: #007bff;">Behavioural Trends</strong> – Understand your child’s behavior and participation in school activities.</li>
                        <li><strong style="color: #007bff;">Upcoming Events & Exams</strong> – Get timely reminders of important dates, exams, and school events.</li>
                    </ul>
                    <p class="fs-5" style="color: #28a745;">
                        By bridging the gap between schools and families, we aim to ensure every child has the best possible support system for their academic 
                        and personal success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 text-center text-white" style="background: linear-gradient(135deg, #00c6ff, #0056b3);">
    <div class="container">
        <h2 class="fw-bolder mb-5">Why Choose <span style="color: #ffc107;">EduDashboard?</span></h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent border-0 text-white h-100">
                    <div class="card-body">
                        <h5 class="card-title">Comprehensive Learning Platform</h5>
                        <p class="card-text">EduDashboard offers a one-stop solution for students and educators to manage courses, track progress, and access valuable resources anytime, anywhere.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card bg-transparent border-0 text-white h-100">
                    <div class="card-body">
                        <h5 class="card-title">User-Friendly Interface</h5>
                        <p class="card-text">Our clean and intuitive design ensures that users of all ages and skill levels can easily navigate and maximize their learning experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card bg-transparent border-0 text-white h-100">
                    <div class="card-body">
                        <h5 class="card-title">Real-Time Performance Tracking</h5>
                        <p class="card-text">Stay informed with up-to-date dashboards that highlight your academic performance, attendance, and key metrics, empowering you to make informed decisions.</p>
                    </div>
                </div>
            </div>
            <!-- You can add more cards here as needed -->
        </div>
    </div>
</section>

    <!-- Our Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('frontend/img/about-3.jpg') }}" alt="Our Vision" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder text-primary mb-3">Our Vision</h2>
                    <p class="fs-5" style="color: #28a745;">
                        At <strong style="color: #007bff;">EduDashboard</strong>, we envision a future where parents are active partners 
                        in their child’s educational journey. Our goal is to build a system that empowers families to unlock the full potential of their children.
                    </p>
                    <ul class="fs-5" style="color: #28a745;">
                        <li><strong style="color: #007bff;">Active Parental Involvement</strong> in academics and personal growth.</li>
                        <li><strong style="color: #007bff;">Bridging the Gap</strong> between home and communication.</li>
                        <li><strong style="color: #007bff;">Real-Time Insights</strong> for timely support and guidance.</li>
                        <li><strong style="color: #007bff;">Holistic Development</strong> covering academics, attendance, and behavior.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- About Us End -->
@endsection
