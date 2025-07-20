@extends('backend.layouts.master')

@section('title', 'Parent Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Parent Dashboard</h2>
    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-parent mx-auto mb-3">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="mb-1">{{ $totalParents ?? 0 }}</h3>
                    <p class="text-muted mb-0">Total Parents</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-parent mx-auto mb-3">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="mb-1">{{ $feedbacks ?? 0 }}</h3>
                    <p class="text-muted mb-0">Feedbacks</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-parent mx-auto mb-3">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="mb-1">{{ $messages ?? 0 }}</h3>
                    <p class="text-muted mb-0">Messages</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card stats-card h-100">
                <div class="card-body text-center">
                    <div class="stats-icon icon-parent mx-auto mb-3">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="mb-1">{{ $meetings ?? 0 }}</h3>
                    <p class="text-muted mb-0">Meetings</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Actions & Recent Feedback -->
    <div class="row">
        <!-- Quick Actions -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0"><i class="fas fa-bolt text-warning mr-2"></i>Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="row">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Parent Feedback -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0"><i class="fas fa-clock text-info mr-2"></i>Recent Parent Feedback</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Student Name</th>
                                <th>Feedback Date</th>
                                <th>Feedback</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($parents as $parent)
                                <tr>
                                    <td>{{ $parent->name }}</td>
                                    <td>{{ $parent->student_name }}</td>
                                    <td>{{ $parent->feedback_date }}</td>
                                    <td>{{ $parent->feedback }}</td>
                                    <td>{{ $parent->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No feedback found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
