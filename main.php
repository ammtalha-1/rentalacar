<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Welcome</title>
</head>
<body>
  <?php include 'nav.php' ?>
  
  <?php include 'footer.php' ?>
        <script src="https://kit.fontawesome.com/fb76160704.js" crossorigin="anonymous"></script>
</body>
</html>