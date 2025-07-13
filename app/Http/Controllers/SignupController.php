<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'course' => 'required|string',
        ]);

        // Logic for signup like saving to DB, sending email etc.
        // For now, just redirect back with success message

        return back()->with('success', 'Thank you for signing up!');
    }
}
