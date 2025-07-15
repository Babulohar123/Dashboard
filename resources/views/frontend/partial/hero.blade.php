<div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px; height: 100vh; overflow: hidden;">
    <!-- Background Video -->
    <video autoplay muted loop class="position-absolute w-100 h-100" style="object-fit: cover; z-index: -1;">
        <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay Content -->
    <div class="container text-center my-5 py-5 d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
        <h1 class="text-white mt-4 mb-4">Parents can easily Monitor his/her children From Home</h1>
        <h1 class="text-white display-1 mb-5">Education Courses</h1>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Courses</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Courses 1</a>
                        <a class="dropdown-item" href="#">Courses 2</a>
                        <a class="dropdown-item" href="#">Courses 3</a>
                    </div>
                </div>
                <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>
