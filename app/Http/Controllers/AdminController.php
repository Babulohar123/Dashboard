<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Student;  // Assuming you have a Student model as well

class AdminController extends Controller
{
    /**
     * Load the admin dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function adminDashboard()
    {
        $totalStudents = \App\User::where('role', 'student')->count();
        $totalTeachers = \App\User::where('role', 'teacher')->count();
        $totalParents = \App\User::where('role', 'parent')->count();
        $activeCourses = \App\Subject::where('is_active', true)->count();

        return view('backend.admin.admin_dashboard', compact('totalStudents', 'totalTeachers', 'totalParents', 'activeCourses'));
    }
    /**
     * Display a table of teachers.
     *
     * @return \Illuminate\View\View
     */
    public function showTeacherTable()
    {
        // Fetch teachers with pagination (10 per page)
        $teachers = Teacher::paginate(10);

        // Pass $teachers to the Blade view
        return view('backend.admin.table_page', compact('teachers'));
    }

    /**
     * Load the teachers dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function teachersDashboard()
    {
        $user = auth()->user();
        $myStudents = 145; // Placeholder
        $subjectsTeaching = method_exists($user, 'subjects') ? $user->subjects()->count() : 0;
        $assignmentsPending = \App\Assignment::where('teacher_id', $user->id)->where('status', 'active')->count();
        $averagePerformance = 82; // Placeholder

        return view('backend.admin.teachers_dashboard', compact('myStudents', 'subjectsTeaching', 'assignmentsPending', 'averagePerformance'));
    }

    /**
     * Load the parents dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function parentsDashboard()
    {
        // This dashboard is handled by ParentController@index
        return redirect()->route('admin.parents.dashboard');
    }

    /**
     * Load the students dashboard view.
     * @return \Illuminate\View\View
     */
    public function studentsDashboard()
    {
        $user = auth()->user();
        $myAttendance = 94; // Placeholder or calculate as needed
        $currentGpa = 3.8; // Placeholder or calculate as needed
        $assignmentsDue = 4; // Placeholder
        $subjectsEnrolled = 6; // Placeholder

        return view('backend.admin.students_dashboard', compact('myAttendance', 'currentGpa', 'assignmentsDue', 'subjectsEnrolled'));
    }
}
