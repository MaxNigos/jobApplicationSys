<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin-login'); // resources/views/admin/admin-login.php
    }

    // Process login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the admin dashboard
            return redirect()->route('admin.applicants');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors('Login failed. Please check your credentials.');
        }
    }

    // Show the signup form
    public function showSignupForm()
    {
        return view('admin.signup'); // resources/views/admin/signup.php
    }

    // Handle signup form submission
    public function signup(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new admin user
        $admin = Admin::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Log the admin in and redirect to the dashboard
        Auth::login($admin);

        return redirect()->route('admin.applicants');
    }
}
