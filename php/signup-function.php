<?php
require_once 'server.php';


if(isset($_POST['register-user'])) {



$fname =  isset($_POST['fname']) ? $_POST['fname'] : "";
$lname = isset ($_POST['lname']) ? $_POST['lname'] : "";
$email = isset ($_POST['email']) ? $_POST['email'] : "";
$uname = isset ($_POST['uname']) ? $_POST['uname'] : "";
$pwd = isset ($_POST['pwd']) ? $_POST['pwd'] : "";

$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (fname,lname,email,uname,pwd) VALUES ('$uname','$lname','$email','$uname','$hashpwd')";

mysqli_query($conn,$sql);

    header("location: ../login-page.php");
    echo "Succesfully created an account!";
} else {
echo "There's an error while inserting data to database";
}
?>