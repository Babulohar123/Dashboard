@php
    $user = auth()->user();
    $role = $user->role ?? 'student';
@endphp


<!-- Dashboard -->
<li class="nav-item">
    @if($role === 'student')
        <a class="nav-link {{ request()->routeIs('admin.students.dashboard') ? 'active' : '' }}" href="{{ route('admin.students.dashboard') }}">
            <i class="fas fa-chart-bar"></i>
            <span>Dashboard</span>
        </a>
    @else
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="fas fa-chart-bar"></i>
            <span>Dashboard</span>
        </a>
    @endif
</li>

@if($role === 'admin')
    <!-- Admin Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#users-menu">
            <i class="fas fa-users"></i>
            <span>Manage Users</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="users-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-shield"></i><span>Admins</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher"></i><span>Teachers</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-friends"></i><span>Parents</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-graduate"></i><span>Students</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-chart-line"></i>
            <span>Student Performance</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-calendar-alt"></i>
            <span>Events/Meetings</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-book"></i>
            <span>Courses/Subjects</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-comments"></i>
            <span>Parent Feedback</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-cogs"></i>
            <span>Site Settings</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-file-alt"></i>
            <span>Data Reports</span>
        </a>
    </li>

@elseif($role === 'teacher')
    <!-- Teacher Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#students-menu">
            <i class="fas fa-user-graduate"></i>
            <span>My Students</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="students-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-list"></i><span>Students List</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-line"></i><span>Track Progress</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-edit"></i><span>Add/Update Marks</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#subjects-menu">
            <i class="fas fa-book"></i>
            <span>Subjects/Courses</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="subjects-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-book-open"></i><span>My Subjects</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-upload"></i><span>Upload Materials</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#assignments-menu">
            <i class="fas fa-tasks"></i>
            <span>Assignments & Tests</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="assignments-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-plus"></i><span>Create/Manage</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-check"></i><span>Grade Submissions</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#schedule-menu">
            <i class="fas fa-clock"></i>
            <span>Schedule</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="schedule-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-calendar"></i><span>Class Routine</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-handshake"></i><span>Parent Meetings</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-comments"></i>
            <span>Parent Feedback</span>
        </a>
    </li>

@elseif($role === 'parent')
    <!-- Parent Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#child-menu">
            <i class="fas fa-child"></i>
            <span>My Child</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="child-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user-check"></i><span>Attendance Report</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-star"></i><span>Marks/Grades</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i><span>Progress Graphs</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-home"></i>
            <span>Homework/Assignments</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#events-menu">
            <i class="fas fa-calendar-alt"></i>
            <span>Events & Meetings</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="events-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-handshake"></i><span>Parent-Teacher Meetings</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-calendar"></i><span>School Events</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#feedback-menu">
            <i class="fas fa-comment-alt"></i>
            <span>Feedback/Complaints</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="feedback-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-paper-plane"></i><span>Send Feedback</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-eye"></i><span>View Responses</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-download"></i>
            <span>Reports</span>
        </a>
    </li>

@elseif($role === 'student')
    <!-- Student Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#subjects-menu">
            <i class="fas fa-book"></i>
            <span>My Subjects</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="subjects-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-book-open"></i><span>View Courses</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-download"></i><span>Download Materials</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#assignments-menu">
            <i class="fas fa-tasks"></i>
            <span>Assignments</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="assignments-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-upload"></i><span>Submit Assignments</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-star"></i><span>View Grades</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#schedule-menu">
            <i class="fas fa-clock"></i>
            <span>Schedule</span>
            <i class="fas fa-chevron-down ml-auto"></i>
        </a>
        <div class="collapse" id="schedule-menu">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-calendar"></i><span>Class Timetable</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-calendar-check"></i><span>Events & Exams</span></a>
                </li>
            </ul>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-file-alt"></i>
            <span>Reports</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-comment"></i>
            <span>Feedback</span>
        </a>
    </li>
@endif