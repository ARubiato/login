<?php
require 'include/bootstrap.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create an account</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/custom.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body class = "bg-info">
    <div class = "container">
    <div class = "card col-lg-6 mt-10 mx-auto">

                <div class = "card-body">
                <div class = "card-header" align = "center">
                <p>Create an account</p>
                </div>
                    <form method = "POST" action = "php/signup-function.php">
                        <div class = "form-group">
                        <h4 class = "text-white" align = "center">REGISTER</h4>
                        </div>
                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Firstname" name = "fname" required>
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Lastname" name = "lname" required>
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Email" name = "email" required>
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Username" name = "uname" required>
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "password" placeholder = "Password" name = "pwd" required>
                        </div>
                        <div class = "form-group">
                            <button type = "submit" class = "btn btn-primary btn-block" name = "register-user">REGISTER</button>
                        </div>
                        <p>Already have an account? Login <a href = "login-page.php">here</a>!</p>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>