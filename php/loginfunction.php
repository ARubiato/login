<?php
session_start();
require 'server.php';

if(isset($_POST['uname']) and isset($_POST['pwd'])) {


    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE uname = '$uname'";
    $data = mysqli_fetch_array(mysqli_query($conn,$sql));

    if(password_verify($pwd,$data['pwd'])) {
        $_SESSION['uname'] = $uname;
        $_SESSION['UID'] = $UID;
        header('Location:../index.php');
    } else {
        header('location:../login-page.php');
        echo "Invalid login credentials!";
    }




}

?>