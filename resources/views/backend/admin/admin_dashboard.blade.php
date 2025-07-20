@extends('backend.layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Admin Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Total Students</h5>
                    <p class="display-4">{{ $totalStudents ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Total Teachers</h5>
                    <p class="display-4">{{ $totalTeachers ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Total Parents</h5>
                    <p class="display-4">{{ $totalParents ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Active Courses</h5>
                    <p class="display-4">{{ $activeCourses ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header bg-white border-bottom">
            <h5 class="mb-0"><i class="fas fa-bolt text-warning mr-2"></i>Quick Actions</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card quick-action-card border">
                        <div class="card-body text-center p-3">
                            <i class="fas fa-user-plus text-primary fa-2x mb-2"></i>
                            <h6 class="mb-0">Add New User</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card quick-action-card border">
                        <div class="card-body text-center p-3">
                            <i class="fas fa-chart-bar text-success fa-2x mb-2"></i>
                            <h6 class="mb-0">Generate Reports</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card quick-action-card border">
                        <div class="card-body text-center p-3">
                            <i class="fas fa-calendar-plus text-info fa-2x mb-2"></i>
                            <h6 class="mb-0">Schedule Event</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card quick-action-card border">
                        <div class="card-body text-center p-3">
                            <i class="fas fa-cog text-secondary fa-2x mb-2"></i>
                            <h6 class="mb-0">System Settings</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
