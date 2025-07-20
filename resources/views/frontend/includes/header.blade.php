<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('/courses') }}" class="nav-item nav-link">Courses</a>
                <a href="{{ url('/team') }}" class="nav-item nav-link">Team</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-flex flex-row align-items-center" style="gap: 10px;">
                @if(Auth::check())
                    <div class="dropdown">
                        <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('uploads/users/' . (Auth::user()->photo ?? 'default.png')) }}" alt="User Photo" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 8px;">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('site.setting') }}">Settings</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-success py-2 px-4">Register</a>
                @endif
            </div>
        </div>
    </nav>
</div>
