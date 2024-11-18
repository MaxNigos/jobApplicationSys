<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\JobApplication;

class JobAppController extends Controller
{
    public function showForm()
    {
        return view('user.apply'); 
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:job_applications,email',
            'position' => 'required|string|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:51200', 
        ]);

        $resumePath = $request->file('resume')->store('resumes');

        JobApplication::create([
            'fname' => $validatedData['fname'],
            'mname' => $validatedData['mname'] ?? '',
            'lname' => $validatedData['lname'],
            'position' => $validatedData['position'],
            'email' => $validatedData['email'],
            'resume' => $resumePath,
        ]);

        return redirect()->route('user/apply')->with('success', 'Application submitted successfully!');
        //return redirect()->route('job-application.form')->with('success', 'Application submitted successfully!'); 
    }   
}