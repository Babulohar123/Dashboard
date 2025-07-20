<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('frontend.form.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

           
           

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.admin.dashboard');
                case 'teacher':
                    return redirect()->route('admin.teachers.dashboard');
                case 'parent':
                    return redirect()->route('admin.parents.dashboard');
                case 'student':
                    return redirect()->route('admin.students.dashboard');
                default:
                    return redirect()->route('frontend.index')->with('message', 'Login successful!');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Clear dashboard_logged flag so it logs next time correctly
        session()->forget('dashboard_logged');

        return redirect()->route('frontend.index')->with('message', 'Logout successful!');
    }
}
