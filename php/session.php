<?php
require 'server.php';
session_start();

$user_chk = $_SESSION['uname'];
$ses_sql = mysqli_query($conn,"SELECT * FROM users WHERE uname = '$user_chk'");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

if(!isset($_SESSION['uname'])) {
    header('location: ../login/login-page.php');
}

?>