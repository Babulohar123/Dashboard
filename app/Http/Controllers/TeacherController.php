<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // List all teachers
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    // Show form to create teacher
    public function create()
    {
        return view('teachers.create');
    }

    // Store new teacher
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'address' => 'nullable',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully');
    }

    // Show edit form
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    // Update teacher
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers,email,'.$teacher->id,
            'phone' => 'nullable',
            'subject' => 'nullable',
            'address' => 'nullable',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');
    }

    // Delete teacher
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
