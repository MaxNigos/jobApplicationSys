@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Login - PM Consulting</title>
        <link rel="stylesheet" href="css/admin-styles.css">
    </head>

<h1>Applicants Dashboard</h1>
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
</table>
@endsection