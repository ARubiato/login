<?php
require 'include/bootstrap.php';


if(isset($_SESSION['uname'])){
    $uname = $_SESSION['uname'];
    
    echo "Welcome" .$uname. "!";
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
    <h1>WELCOME!!!</h1>


</body>
</html>