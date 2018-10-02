<?php
require 'server.php';
session_start();

$user_chk = $_SESSION['uname'];
$ses_sql = mysqli_query($conn,"SELECT uname FROM users WHERE uname = '$user_chk'");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_ses = $row['uname'];

if(!isset($_SESSION['uname'])) {
    header('location: ../login/login-page.php');
}

?>