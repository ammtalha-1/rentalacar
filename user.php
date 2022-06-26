<?php
include 'config.php';
error_reporting(0);
$user = $_POST['user'];
$emailuser = $_POST['email'];
$phoneuser = $_POST['phone'];
$commentuser = $_POST['comments'];

$query = "INSERT INTO contactuser(username,email,phone,comment)VALUES('$user','$emailuser','$phoneuser','$commentuser')";
$result = mysqli_query($conn,$query);
header("location: mainscreen.php");
?>