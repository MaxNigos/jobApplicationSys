
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Job Application</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <div class = "form-container">
            <div class="company-logo text-center">
                <!--<a href=" " class="logo img-responsive"> </a>-->
                <img src="company-logo.png" class="img-responsive" alt="Group of Companies">
            </div>
            <h1 class ="header"> Job Application Form</h1>
                <form action="{{ route('job-application.submit') }}" id="job-application-form" method="POST" enctype="multipart/form-data">
                @csrf
                <!--<form action="/apply" id="job-application-form" method="POST">-->
                    <div class="form-group">
                        <label for ="fname" class="control-label">First Name</label>
                        <input type="text" id="fname" name="fname" class="control-form" required>
                    </div>
                    <div class="form-group">
                        <label for ="mname" class="control-label">Middle Name</label>
                        <input type="text" id="mname" name="mname" class="control-form">
                    </div>
                    <div class="form-group">
                        <label for ="lname" class="control-label">Last Name</label>
                        <input type="text" id="lname" name="lname" class="control-form" required>
                    </div>
                    <div class="form-group">
                        <label for ="email" class="control-label">Email</label>
                        <input type="email" id="email" name="email" class="control-form" required>
                    </div>
                    <div class="form-group">
                        <label for ="position" class="control-label">Position applying for</label>
                        <select id="position" name="position" required>
                            <option value="" disabled selected>Select Position</option>
                            <option value="Position1">Position 1</option>
                            <option value="Position2">Position 2</option>
                            <option value="Position3">Position 3</option>
                        </select>   
                    </div>
                    <div class="form-group">
                        <label for ="resume" class="control-label">Upload Resume (Max. 50 MB)</label>
                        <input type="file" id="resume" name="resume" class="control-form" accept=".pdf, .doc, .docx" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn submitBtn" id="submit" name="submit" >Submit Application</button>
                    </div>
                </form>
        </div>
    </body>
</html>