<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParentFeedback;

class ParentController extends Controller
{
    // Parent dashboard with summary data
    public function index()
    {
        $parents = ParentFeedback::latest()->get();

        $totalParents = $parents->count();
        $feedbacks = $parents->whereNotNull('feedback')->count();
        $messages = 98; // Placeholder static data
        $meetings = 5;  // Placeholder static data

        return view('backend.admin.parents_dashboard', compact(
            'parents', 'totalParents', 'feedbacks', 'messages', 'meetings'
        ));
    }

    // Show form to create new parent feedback (optional)
    public function create()
    {
        return view('backend.admin.parents_create'); // Agar create form hai to
    }

    // Store new parent feedback to DB
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'feedback_date' => 'required|date',
            'feedback' => 'nullable|string',
            'status' => 'required|in:Reviewed,Pending,Action Required',
        ]);

        ParentFeedback::create($validated);

        return redirect()->route('admin.parents.dashboard')->with('success', 'Parent added successfully!');
    }

    // Show form to edit existing parent feedback
    public function edit($id)
    {
        $parent = ParentFeedback::findOrFail($id);

        return view('backend.admin.parents_edit', compact('parent'));
    }

    // Update existing parent feedback in DB
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'feedback_date' => 'required|date',
            'feedback' => 'nullable|string',
            'status' => 'required|in:Reviewed,Pending,Action Required',
        ]);

        $parent = ParentFeedback::findOrFail($id);
        $parent->update($validated);

        return redirect()->route('admin.parents.dashboard')->with('success', 'Parent updated successfully!');
    }

    // Delete a parent feedback record
    public function destroy($id)
    {
        $parent = ParentFeedback::findOrFail($id);
        $parent->delete();

        return back()->with('success', 'Parent deleted successfully!');
    }
}
