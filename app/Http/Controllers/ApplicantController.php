<?php

namespace App\Http\Controllers;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $applicants = JobApplication::query()
            ->when($query, function ($q) use ($query) {
                $q->where('fname', 'like', "%{$query}%")
                ->orWhere('lname', 'like', "%{$query}%")
                ->orWhere('position', 'like', "%{$query}%");
            })
            ->get();

        return view('admin.applicants', compact('applicants'));
    }

    /*public function index()
    {
        // Fetch applicants from the database
        $applicants = JobApplication::all(); // Or use pagination with ->paginate()
        
        return view('admin.applicants', compact('applicants'));
    }*/
}