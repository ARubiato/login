<?php
session_start();
require 'server.php';

if(isset($_POST['uname']) and isset($_POST['pwd'])) {


    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE uname = '$uname' and pwd = '$pwd'";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);


    if($count == 1) {
        $_SESSION['uname'] = $uname;

        header("Location: ../welcome.php");
    } else {
        echo "Invalid login credentials";
    }
}

?>