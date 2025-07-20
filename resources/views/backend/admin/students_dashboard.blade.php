@extends('backend.layouts.master')

@section('title', 'Student Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Student Dashboard</h2>

    <!-- Stats Cards -->
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>My Attendance</h5>
                    <p class="display-4">{{ $myAttendance ?? 0 }}%</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Current GPA</h5>
                    <p class="display-4">{{ $currentGpa ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Assignments Due</h5>
                    <p class="display-4">{{ $assignmentsDue ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Subjects Enrolled</h5>
                    <p class="display-4">{{ $subjectsEnrolled ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="card mt-4">
        <div class="card-header">Quick Actions</div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-md-3 mb-3">
                    <div class="p-3 border rounded bg-white h-100">
                        <i class="fas fa-upload text-primary fa-2x mb-2"></i>
                        <div class="mt-2 font-weight-bold">Submit Assignment</div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="p-3 border rounded bg-white h-100">
                        <i class="fas fa-book-open text-success fa-2x mb-2"></i>
                        <div class="mt-2 font-weight-bold">View Study Material</div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="p-3 border rounded bg-white h-100">
                        <i class="fas fa-calendar-check text-info fa-2x mb-2"></i>
                        <div class="mt-2 font-weight-bold">Check Attendance</div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="p-3 border rounded bg-white h-100">
                        <i class="fas fa-graduation-cap text-warning fa-2x mb-2"></i>
                        <div class="mt-2 font-weight-bold">View Grades</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="card mt-4">
        <div class="card-header">Recent Activity</div>
        <div class="card-body">
            <div class="alert alert-info">No recent activity found.</div>
        </div>
    </div>
</div>
@endsection
