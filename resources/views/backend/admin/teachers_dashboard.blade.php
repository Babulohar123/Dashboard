@extends('backend.layouts.master')

@section('title', 'Teacher Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Teacher Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>My Students</h5>
                    <p class="display-4">{{ $myStudents ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Subjects Teaching</h5>
                    <p class="display-4">{{ $subjectsTeaching ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Assignments Pending</h5>
                    <p class="display-4">{{ $assignmentsPending ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h5>Avg. Performance</h5>
                    <p class="display-4">{{ $averagePerformance ?? 0 }}%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">Recent Activity</div>
        <div class="card-body">
            <div class="alert alert-info">No recent activity found.</div>
        </div>
    </div>
</div>
@endsection
