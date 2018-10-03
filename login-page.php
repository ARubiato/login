<?php
require 'include/bootstrap.php';
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css" />
    <script src="main.js"></script>
</head>
<body class = "bg-info">
    <div class = "container">
        
        <div class = "card col-lg-6 mt-10 mx-auto">
            <div class = "card-body bg-default">
                <div class = "card-title" align = "center">
                <p class = "p-custom">Please enter your information.</p>
                </div>
                <hr>
                <form method = "post" action = "php/loginfunction.php">

                    <div class = "form-group">
                        <input type = "text" class = "form-control" name = "uname" placeholder = "Username" required>
                    </div>

                    <div class = "form-group">
                        <input type = "Password" class = "form-control" name = "pwd" placeholder = "Password" required>
                    </div>

                    <div class = "form-group mt-1">
                        <button type = "submit" class = "btn btn-primary btn-block" name = "login-user">LOGIN</button>
                    </div>

                <div class = "form-group mt-1">
                <p>Don't have an account? Create one <a href = "signup-page.php">here</a>!</p>
                </div>
            </form>
            </div>
       </div>
    
    </div>
</body>
</html>