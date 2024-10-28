<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobAppController extends Controller
{
    public function showForm()
    {
        return view('apply'); // resources/views/apply.php
    }

    public function submitForm(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'position' => 'required|string|max:255 ',
            //'email' => 'required|email',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:51200', 
        ]);

        // upload cv
        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes');
        }

        return redirect()->route('apply')->with('success', 'Application submitted successfully!');
    }
}
