<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Applicants Dashboard</title>
       <!-- <link rel="stylesheet" href="css/admin-styles.css"> -->
       <link rel="stylesheet" href="{{ asset('css/admin-styles.css') }}">
    </head>
    
    <body>
    <div class="applicant-container">
        <h1>Applicants Dashboard</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
     
        <div class="search-container">
            <form action="{{ route('admin.applicants') }}" method="GET" class="search-form">
                <input 
                    type="text" 
                    name="search" 
                    class="search-input" 
                    placeholder="Name or Position" 
                    value="{{ request()->input('search') }}">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>

        <table border="1" class="applicants-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Resume</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($applicants as $applicant)
                    <tr>
                        <td>{{ $applicant->id }}</td>
                        <td>{{ $applicant->fname }}</td>
                        <td>{{ $applicant->mname }}</td>
                        <td>{{ $applicant->lname }}</td>
                        <td>{{ $applicant->email }}</td>
                        <td>{{ $applicant->position }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $applicant->resume) }}" target="_blank">View Resume</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No applicants found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

        <!-- <h1>Applicants Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Resume</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applicants as $applicant)
                <tr>
                    <td>{{ $applicant->fname }}</td>
                    <td>{{ $applicant->mname }}</td>
                    <td>{{ $applicant->lname }}</td>
                    <td>{{ $applicant->email }}</td>
                    <td><a href="{{ asset('storage/'.$applicant->resume) }}" target="_blank">Download Resume</a></td>
                </tr>
                @endforeach 
            </tbody>
        </table> -->
</body>