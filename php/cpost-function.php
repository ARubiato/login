<?php
require 'server.php';
require 'session.php';
if(isset($_POST['PO_Title']) and isset($_POST['PO_Desc'])) {

$PO_Title = $_POST['PO_Title'];
$PO_Desc = $_POST['PO_Desc'];
// $UID = $_SESSION['UID'];

$sql = "INSERT INTO post (UID,PO_Title,PO_Desc) VALUES ('$UID','$PO_Title','$PO_Desc')";

mysqli_query($conn,$sql);


}


?>