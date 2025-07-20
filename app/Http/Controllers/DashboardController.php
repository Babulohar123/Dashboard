<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subject;
use App\Assignment;
use App\StudentMark;
use App\Attendance;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if (!$user || !$user->role) {
            return redirect()->route('login')->withErrors('Unauthorized access.');
        }

        $stats = $this->getDashboardStats($user);
        return view('backend.dashboard', compact('user', 'stats'));
    }

    private function getDashboardStats($user)
    {
        switch ($user->role) {
            case 'admin':
                return [
                    'total_students' => User::where('role', 'student')->count(),
                    'total_teachers' => User::where('role', 'teacher')->count(),
                    'total_parents' => User::where('role', 'parent')->count(),
                    'active_courses' => Subject::where('is_active', true)->count(),
                    'monthly_events' => 12, // Placeholder
                    'pending_feedback' => 18 // Placeholder
                ];

            case 'teacher':
                return [
                    'my_students' => 145, // Placeholder
                    'subjects_teaching' => $user->subjects()->count(),
                    'assignments_pending' => Assignment::where('teacher_id', $user->id)
                        ->where('status', 'active')->count(),
                    'average_performance' => 82 // Placeholder
                ];

            case 'parent':
                return [
                    'child_attendance' => 94, // Placeholder
                    'overall_grade' => 'A-', // Placeholder
                    'pending_assignments' => 3, // Placeholder
                    'upcoming_events' => 5 // Placeholder
                ];

            case 'student':
                $attendanceRate = $this->calculateAttendanceRate($user->id);
                $currentGPA = $this->calculateGPA($user->id);
                
                return [
                    'my_attendance' => $attendanceRate,
                    'current_gpa' => $currentGPA,
                    'assignments_due' => 4, // Placeholder
                    'subjects_enrolled' => 6 // Placeholder
                ];

            default:
                return [];
        }
    }

    private function calculateAttendanceRate($studentId)
    {
        $totalClasses = Attendance::where('student_id', $studentId)->count();
        $presentClasses = Attendance::where('student_id', $studentId)
            ->where('status', 'present')->count();
        
        return $totalClasses > 0 ? round(($presentClasses / $totalClasses) * 100) : 0;
    }

    private function calculateGPA($studentId)
    {
        $marks = StudentMark::where('student_id', $studentId)->get();
        
        if ($marks->isEmpty()) {
            return 0;
        }

        $totalPercentage = $marks->sum(function ($mark) {
            return ($mark->marks_obtained / $mark->total_marks) * 100;
        });

        $averagePercentage = $totalPercentage / $marks->count();
        return round($averagePercentage / 25, 1); // GPA on 4.0 scale
    }
}
