<?php
session_start();
require 'server.php';

if(isset($_POST['uname']) and isset($_POST['pwd'])) {


    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT pwd FROM users WHERE uname = '$uname'";
    $data = mysqli_fetch_array(mysqli_query($conn,$sql));

    if(password_verify($pwd,$data['pwd'])) {
        $_SESSION['uname'] = $uname;

        header('Location:../index.php');
    } else {
        echo "Invalid login credentials!";
    }

    // $result = mysqli_query($conn,$sql);
    // $count = mysqli_num_rows($result);



    // // if($count == 1) {
    // //     $_SESSION['uname'] = $uname;

    // //     header("Location: ../welcome.php");
    // // } else {
    // //     echo "Invalid login credentials";
    // // }
}

?>