<?php
include 'config.php';
session_start();

error_reporting(0);

if(isset($_SESSION['username'])){
    header("location: login.php");
}
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("location: mainscreen.php");
}else{
    echo "<script>alert('Email or Pssword is Invalid')</script>";
}
}

?>