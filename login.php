<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>
<?php include 'nav.php'?>

    <div class="container-fluid">
        <form action="" method="POST">
            <div class="container">
                <div class="form-group" id="card">
                    <div class="form-group">
                        <h2 class="text-center">Login</h2>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success" onclick="funsubmit();">Submit</button>

                            <div class="form-group">
                                <input type="checkbox"><span>Remeber Me</span>
                            </div>
                    </div>
                    </form>
                    <p class="text-center"><a href="register.php">Register Here as A Customer!</a></p>
                    <p class="text-center"><a href="driver.php">Register Here as A Driver!</a></p>

                    <p class="text-center"><a href="">Forgot Pasword?</a></p>
                </div>
            </div>
    </div>
    </form>
    </div>
          <?php include 'footer.php'?>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/fb76160704.js" crossorigin="anonymous"></script>
    <script>
        function funsubmit() {
            alert("in page login")
            $.get("getcontrol.php", {
                    action: 'getuser'
                },
                function(result) {
                    var email = document.getElementById('email').value;
                    var pass = document.getElementById('pass').value;
                    var i = 0;
                    var fres = jQuery.parseJSON(result);
                    while (i < 15) {
                        console.log(fres['email'][i]);
                        if (fres['email'][i] == email) {
                            if (fres['pass'][i] == pass) {
                                alert("Login Successful");
                                window.location.href = "index.php";
                            }
                    }
                        i++;
                }
                });
        }
    </script>
</body>

</html>