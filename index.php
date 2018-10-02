<?php
require 'include/bootstrap.php';
require 'php/session.php';


if(isset($_SESSION['uname'])){
    $uname = $_SESSION['uname'];
    
    echo "Welcome " .$uname. "!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<header>
<h4><a href = "php/logout.php">Logout</a></h4>
</header>
    <div class = "container">
        <div class = "card col-lg-12">
            <div class = "card-body">
                <div class = "form-group col-lg-6">
                    <input type = "text" class = "form-control" name = "add-stdnt">
                </div>
            </div>
        </div>
    </div>

</body>
</html>