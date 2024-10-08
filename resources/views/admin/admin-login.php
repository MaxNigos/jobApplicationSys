<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <title>Login - PM Consulting</title>
        <link rel="stylesheet" href="css/admin-styles.css">
    </head>

    <body class = "login_admin">
 
        <div class = "form-container">
            <div class="company-logo text-center">
                <a href=" " class="logo img-responsive"> </a>
                <img src="company-logo.png" class="img-responsive" alt="Group of Companies">
            </div>
            <h1 class ="header"> Login </h1>

            <form action="/admin/login" id="admin-login" method="POST">
                <div class="form-group">
                    <label for ="email" class="control-label">Email Address</label>
                    <input type="email" id="email" name="email" class="control-form" required>
                </div>
                <div class="form-group">
                    <label for ="password" class="control-label">Password</label>
                    <input type="password" id="password" name="password" class="control-form" required>
                </div>
                <div class="form-group">
                    <div class="checkbox checkbox-inline">
                        <input type="checkbox" id="remember" name="remember">
                        <label for ="remember" class="control-label"> Remember me </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn submitBtn" id="login"> Login </button>        
                </div>
                <!--<div class="form-group">
                    <button class="btn createAcc" id="signup"> Sign Up </button>        
                </div>-->
                <!--<div class="form-group">
                    <a href="signup.php" class="btn signUp" id="signup">Sign Up</a>
                </div>-->

                <div class="form-group">
                    <div class="hyperlink">
                        <a href= " link "> Forgot password? </a>
                    </div>   
                </div>
            </form>
        </div>    
    </body>
</html>
