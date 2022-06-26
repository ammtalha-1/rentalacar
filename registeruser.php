<?php
include 'config.php';
session_start();
error_reporting(0);

if(!isset($_SESSION['username'])){
    header("location: login.php");
}
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password =md5($_POST['paas']);
    $cpassword =md5($_POST['cpass']);
    if ($password == $cpassword) {
        $sql = "SELECT * FROM   users where email='$email'"  ;
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users(username,email,password)
            VALUES('$username','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('User Registration Complete')</script>";
            $username = "";
            $email = "";
            $_POST['pass'] = "";
            $_POST['cpass'] = "";
        }   
        else
         {
                echo "<script>alert('Something Wrong')</script>";
        }
    } 
    else 
    {
            echo "<script>alert('User Already Exists')</script>";           
    }
}else {
    echo "<script>alert('Password Not Matched')</script>";
} 
}
?>