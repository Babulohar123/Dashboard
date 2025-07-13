{{-- resources/views/include/frontend/partial/course.blade.php --}}

<div class="container-fluid px-0 py-5">
    <div class="row mx-0 justify-content-center pt-5">
        <div class="col-lg-6">
            <div class="section-title text-center position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6>
                <h1 class="display-4">Checkout New Releases Of Our Courses</h1>
            </div>
        </div>
    </div>
    <div class="owl-carousel courses-carousel">
        {{-- Static courses, aap chahe to DB se dynamic kar sakte hain --}}
        @foreach ([
            ['frontend/img'=>'courses-1.jpg', 'title'=>'Web design & development courses for beginners', 'instructor'=>'John Doe', 'rating'=>4.5, 'reviews'=>250],
            ['frontend/img'=>'courses-2.jpg', 'title'=>'Advanced Java Programming Course', 'instructor'=>'Jane Smith', 'rating'=>4.8, 'reviews'=>180],
            ['frontend/img'=>'courses-2.jpg', 'title'=>'Advanced Java Programming Course', 'instructor'=>'Jane Smith', 'rating'=>4.8, 'reviews'=>180],
            ['frontend/img'=>'courses-3.jpg', 'title'=>'Digital Marketing Masterclass', 'instructor'=>'Mike Johnson', 'rating'=>4.6, 'reviews'=>220],
            ['frontend/img'=>'courses-4.jpg', 'title'=>'Graphic Design Basics', 'instructor'=>'Emily Davis', 'rating'=>4.7, 'reviews'=>150],
            ['frontend/img'=>'courses-5.jpg', 'title'=>'Photography for Beginners', 'instructor'=>'Chris Lee', 'rating'=>4.4, 'reviews'=>100],
            ['frontend/img'=>'courses-6.jpg', 'title'=>'SEO Strategies 2025', 'instructor'=>'Sara Wilson', 'rating'=>4.9, 'reviews'=>300],
        ] as $course)
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{ asset('frontend/img/' . $course['frontend/img']) }}" alt="{{ $course['title'] }}">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">{{ $course['title'] }}</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>{{ $course['instructor'] }}</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>{{ $course['rating'] }} <small>({{ $course['reviews'] }})</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="{{ url('course/detail') }}">Course Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center bg-image mx-0 mb-5">
        <div class="col-lg-6 py-5">
            <div class="bg-white p-5 my-5">
                <h1 class="text-center mb-4">30% Off For New Students</h1>
                <form method="POST" action="{{ route('signup') }}">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="padding: 30px 20px;" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="padding: 30px 20px;" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select name="course" class="custom-select bg-light border-0 px-3" style="height: 60px;" required>
                                    <option value="" selected>Select A Course</option>
                                    <option value="courses-1">Courses 1</option>
                                    <option value="courses-2">Courses 2</option>
                                    <option value="courses-3">Courses 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">Sign Up Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
