<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Education Performance Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --admin-primary: #3b82f6;
            --admin-secondary: #1e40af;
            --teacher-primary: #10b981;
            --teacher-secondary: #047857;
            --parent-primary: #8b5cf6;
            --parent-secondary: #6d28d9;
            --student-primary: #f59e0b;
            --student-secondary: #d97706;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }

        .sidebar {
            min-height: 100vh;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 80px !important;
        }

        .sidebar-admin {
            background: linear-gradient(135deg, var(--admin-primary), var(--admin-secondary));
        }

        .sidebar-teacher {
            background: linear-gradient(135deg, var(--teacher-primary), var(--teacher-secondary));
        }

        .sidebar-parent {
            background: linear-gradient(135deg, var(--parent-primary), var(--parent-secondary));
        }

        .sidebar-student {
            background: linear-gradient(135deg, var(--student-primary), var(--student-secondary));
        }

        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.3s ease;
            border: none;
            background: none;
        }

        .nav-link:hover {
            color: white !important;
            background: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }

        .nav-link.active {
            color: white !important;
            background: rgba(255,255,255,0.2);
            border-left: 4px solid white;
        }

        .nav-link i {
            width: 20px;
            text-align: center;
            margin-right: 10px;
        }

        .collapsed .nav-link span {
            display: none;
        }

        .collapsed .nav-link i {
            margin-right: 0;
        }

        .stats-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }

        .icon-admin { background: linear-gradient(135deg, var(--admin-primary), var(--admin-secondary)); }
        .icon-teacher { background: linear-gradient(135deg, var(--teacher-primary), var(--teacher-secondary)); }
        .icon-parent { background: linear-gradient(135deg, var(--parent-primary), var(--parent-secondary)); }
        .icon-student { background: linear-gradient(135deg, var(--student-primary), var(--student-secondary)); }

        .welcome-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .welcome-admin {
            background: linear-gradient(135deg, var(--admin-primary), var(--admin-secondary));
        }

        .welcome-teacher {
            background: linear-gradient(135deg, var(--teacher-primary), var(--teacher-secondary));
        }

        .welcome-parent {
            background: linear-gradient(135deg, var(--parent-primary), var(--parent-secondary));
        }

        .welcome-student {
            background: linear-gradient(135deg, var(--student-primary), var(--student-secondary));
        }

        .main-content {
            transition: margin-left 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .quick-action-card {
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .quick-action-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .activity-item {
            padding: 15px;
            border-left: 3px solid #e2e8f0;
            margin-bottom: 15px;
            background: white;
            border-radius: 0 8px 8px 0;
            transition: all 0.3s ease;
        }

        .activity-item:hover {
            border-left-color: var(--admin-primary);
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 1000;
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0 !important;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar sidebar-{{ auth()->user()->role ?? 'admin' }}" id="sidebar">
            <div class="p-4">
                <!-- User Profile -->
                <div class="text-center text-white mb-4 pb-3 border-bottom border-light">
                    <div class="user-avatar mx-auto mb-2">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                    <h6 class="mb-1">{{ auth()->user()->name ?? 'User' }}</h6>
                    <small class="text-light opacity-75 text-capitalize">{{ auth()->user()->role ?? 'User' }}</small>
                </div>

                <!-- Navigation Menu -->
                <ul class="nav flex-column">
                    @include('backend.includes.sidebar')
                </ul>
            </div>

            <!-- Bottom Actions -->
            <div class="mt-auto p-3 border-top border-light">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-content flex-grow-1" id="main-content">
            <!-- Top Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <button class="btn btn-link d-lg-none" id="sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                
                <a class="navbar-brand ml-3" href="{{ route('dashboard') }}">
                    <i class="fas fa-graduation-cap text-primary mr-2"></i>
                    EduDashboard
                </a>

                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-toggle="dropdown">
                            <div class="user-avatar mr-2">
                                {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                            </div>
                            <span class="d-none d-md-inline">{{ auth()->user()->name ?? 'User' }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Profile</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Sidebar toggle
            $('#sidebar-toggle').click(function() {
                $('#sidebar').toggleClass('show');
            });

            // Collapse sidebar on desktop
            $('.sidebar-collapse').click(function() {
                $('#sidebar').toggleClass('collapsed');
                $('#main-content').toggleClass('ml-5');
            });

            // Close sidebar on mobile when clicking outside
            $(document).click(function(e) {
                if ($(window).width() <= 768) {
                    if (!$(e.target).closest('#sidebar, #sidebar-toggle').length) {
                        $('#sidebar').removeClass('show');
                    }
                }
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>