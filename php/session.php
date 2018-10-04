<?php
require 'server.php';

if(!isset($_SESSION['uname'])) {
    session_start();
}

$user_chk = $_SESSION['uname'];
$ses_sql = mysqli_query($conn,"SELECT *,CONCAT(fname,' ',lname) AS Fullname FROM users WHERE uname = '$user_chk'");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$UID = $row['UID'];
$FullN = $row['Fullname'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];


if(!isset($_SESSION['uname'])) {
    header('location: ../login/login-page.php');
}


?>