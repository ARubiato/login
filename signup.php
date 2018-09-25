<?php
require 'include/bootstrap.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create an account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body>
    <div class = "container">
        <div class = "card col-lg-12">
            <div class = "row">

                <div class = "card card-body col-lg-6 bg-primary">
                    <form method = "POST" action = "php/signup-function.php">
                        <div class = "form-group">
                        <h4 class = "text-white" align = "center">REGISTER</h4>
                        </div>
                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Firstname" name = "fname">
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Lastname" name = "lname">
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Email" name = "email">
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "text" placeholder = "Username" name = "uname">
                        </div>

                        <div class = "form-group">
                            <input class = "form-control" type = "password" placeholder = "Password" name = "pwd">
                        </div>

                        <button type = "submit" class = "btn btn-default btn-block" name = "register-user">REGISTER</button>

                    </form>
                </div>

                <div class = "card card-body col-lg-6">
                    <form method = "POST" action = "php/loginfunction.php">
                        <div class = "form-group">
                        <h4 align = "center">LOGIN</h4>
                        </div>
                        <div class = "form-group">
                            <input type = "text" class = "form-control" placeholder = "Enter your username" name = "uname">
                        </div>

                        <div class = "form-group">
                            <input type = "text" class = "form-control" placeholder = "Enter your password" name = "pwd">
                        </div>

                        <div class = "form-group">
                            <button type = "submit" class = "btn btn-primary btn-block" name = "login-user">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>