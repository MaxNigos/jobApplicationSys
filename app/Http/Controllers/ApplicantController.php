<?php

namespace App\Http\Controllers;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        // Fetch applicants from the database
        $applicants = JobApplication::all(); // Or use pagination with ->paginate()

        return view('admin.applicants', compact('applicants'));
    }
}