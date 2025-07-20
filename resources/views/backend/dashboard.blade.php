@extends('backend.layouts.master')

@section('title', 'Dashboard - Education Performance')

@section('content')
@php
    $user = auth()->user();
    $role = $user->role;
    $roleColors = [
        'admin' => 'admin',
        'teacher' => 'teacher', 
        'parent' => 'parent',
        'student' => 'student'
    ];
    $roleColor = $roleColors[$role] ?? 'admin';
    
    $roleMessages = [
        'admin' => 'Welcome back! Here\'s an overview of your educational institution.',
        'teacher' => 'Ready to inspire minds today? Check your classroom updates.',
        'parent' => 'Stay connected with your child\'s educational journey.',
        'student' => 'Keep up the great work! Here\'s your progress overview.'
    ];
@endphp

<!-- Welcome Section -->
<div class="card welcome-card welcome-{{ $roleColor }} text-white mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="mb-2">Good morning, {{ $user->name }}!</h2>
                <p class="mb-0 opacity-90">{{ $roleMessages[$role] }}</p>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                <i class="fas fa-graduation-cap fa-3x opacity-50"></i>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    @if($role === 'admin')
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['total_students'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Total Students</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 12% from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['total_teachers'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Total Teachers</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 5% from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['total_parents'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Total Parents</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 8% from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['active_courses'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Active Courses</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 3% from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['monthly_events'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">This Month Events</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['pending_feedback'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Pending Feedback</p>
                </div>
            </div>
        </div>
    @elseif($role === 'teacher')
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['my_students'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">My Students</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['subjects_teaching'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Subjects Teaching</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['assignments_pending'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Assignments Pending</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['average_performance'] ?? 0 }}%</h3>
                    <p class="text-muted mb-0">Average Performance</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 5% from last month</small>
                </div>
            </div>
        </div>
    @elseif($role === 'parent')
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['child_attendance'] ?? 0 }}%</h3>
                    <p class="text-muted mb-0">Child Attendance</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 2% from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['overall_grade'] ?? 'N/A' }}</h3>
                    <p class="text-muted mb-0">Overall Grade</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['pending_assignments'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Pending Assignments</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['upcoming_events'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Upcoming Events</p>
                </div>
            </div>
        </div>
    @elseif($role === 'student')
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['my_attendance'] ?? 0 }}%</h3>
                    <p class="text-muted mb-0">My Attendance</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 1% from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['current_gpa'] ?? 'N/A' }}</h3>
                    <p class="text-muted mb-0">Current GPA</p>
                    <small class="text-success"><i class="fas fa-arrow-up"></i> 0.2 from last month</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['assignments_due'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Assignments Due</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-{{ $roleColor }} mx-auto mb-3">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="mb-1">{{ $stats['subjects_enrolled'] ?? 0 }}</h3>
                    <p class="text-muted mb-0">Subjects Enrolled</p>
                </div>
            </div>
        </div>
    @endif
</div>

<!-- Quick Actions & Recent Activity -->
<div class="row">
    <!-- Quick Actions -->
    <div class="col-lg-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-white border-bottom">
                <h5 class="mb-0"><i class="fas fa-bolt text-warning mr-2"></i>Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @if($role === 'admin')
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-user-plus text-primary fa-2x mb-2"></i>
                                    <h6 class="mb-0">Add New User</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-chart-bar text-success fa-2x mb-2"></i>
                                    <h6 class="mb-0">Generate Reports</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-calendar-plus text-info fa-2x mb-2"></i>
                                    <h6 class="mb-0">Schedule Event</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-cog text-secondary fa-2x mb-2"></i>
                                    <h6 class="mb-0">System Settings</h6>
                                </div>
                            </div>
                        </div>
                    @elseif($role === 'teacher')
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-plus text-success fa-2x mb-2"></i>
                                    <h6 class="mb-0">Create Assignment</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-check text-primary fa-2x mb-2"></i>
                                    <h6 class="mb-0">Grade Submissions</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-upload text-info fa-2x mb-2"></i>
                                    <h6 class="mb-0">Upload Materials</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-calendar text-warning fa-2x mb-2"></i>
                                    <h6 class="mb-0">Schedule Meeting</h6>
                                </div>
                            </div>
                        </div>
                    @elseif($role === 'parent')
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-comment text-purple fa-2x mb-2"></i>
                                    <h6 class="mb-0">Send Feedback</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-calendar text-info fa-2x mb-2"></i>
                                    <h6 class="mb-0">Schedule Meeting</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-download text-success fa-2x mb-2"></i>
                                    <h6 class="mb-0">Download Reports</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card quick-action-card border">
                                <div class="card-body text-center p-3">
                                    <i class="fas fa-eye text-primary fa-2x mb-2"></i>
                                    <h6 class="mb-0">View Progress</h6>
                                </div>
                            </div>
                        </div>
                    {{-- Removed duplicate student dashboard quick actions --}}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="col-lg-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-white border-bottom">
                <h5 class="mb-0"><i class="fas fa-clock text-info mr-2"></i>Recent Activity</h5>
            </div>
            <div class="card-body">
                <div class="activity-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-primary rounded-circle p-2">
                                <i class="fas fa-plus text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ml-3">
                            <h6 class="mb-1">New assignment posted</h6>
                            <p class="text-muted mb-1">Mathematics - Chapter 5 Quiz</p>
                            <small class="text-muted">2 hours ago</small>
                        </div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-success rounded-circle p-2">
                                <i class="fas fa-check text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ml-3">
                            <h6 class="mb-1">Grade updated</h6>
                            <p class="text-muted mb-1">Science Project - Grade: A</p>
                            <small class="text-muted">5 hours ago</small>
                        </div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-info rounded-circle p-2">
                                <i class="fas fa-calendar text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ml-3">
                            <h6 class="mb-1">Parent meeting scheduled</h6>
                            <p class="text-muted mb-1">Tomorrow at 3:00 PM</p>
                            <small class="text-muted">1 day ago</small>
                        </div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-warning rounded-circle p-2">
                                <i class="fas fa-bell text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ml-3">
                            <h6 class="mb-1">Attendance reminder</h6>
                            <p class="text-muted mb-1">Please mark today's attendance</p>
                            <small class="text-muted">2 days ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection