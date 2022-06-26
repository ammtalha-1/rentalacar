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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
<?php include 'nav.php'?>

    <section>
        <div class="container-fluid">
            <section class="my-5">
                <form onsubmit="funsubmit();" method="POST">
                    <div class="container">
                        <div class="form-group">
                            <div class="form-group">
                                <h2 class="text-center">Register</h2>
                                <form action="login.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="user" id="user">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" class="form-control" placeholder="Email" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="paas" id="pass">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
                                    </div>
                                    <div class="form-group">
                                    <input type="number"  class="form-control" id="cnic" pattern="3[1-9]{4}[0-9]{7}[0-9]{1}" placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                    <input type="text"  class="form-control"  pattern="+92[3-9]{3}[0-9]{7}" required="" id="phone" placeholder="XXXX-XXXXXXX" type = "number" maxlength = "13" >
                                    </div>
                                    <div class="form-group">
                                    <input type="file" class="form-control-file" id="choose">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                    <br><br>
                                    <input type="button" name="View Data" value="view" class="btn btn-success" onclick="funsub();">

                                    <input type="checkbox"><span>Remeber Me</span>
                                </form>

                                <p class="text-center"><a href="login.php">Login Here!</a></p>
                                <p class="text-center"> <a href="">Forgot Pasword?</a></p>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </section>
        <div class="fetch">

        </div>
      <?php include 'footer.php'?>
        <script src="https://kit.fontawesome.com/fb76160704.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
        <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
        <script>
            function funsubmit() {
                $.post("controller.php", {
                        user: document.getElementById("user").value,
                        email: document.getElementById("email").value,
                        pass: document.getElementById("pass").value,
                        cnic: document.getElementById("cnic").value,
                        phone: document.getElementById("phone").value,
                        choose: document.getElementById("choose").value,
                        action: 'driverdata'
                    },
                    function(result) {
                        alert("Driver Data Added")
                    });
            }

            function funsub() {

                window.location.href = "driverdata.php";
            }
        </script>
</body>

</html>