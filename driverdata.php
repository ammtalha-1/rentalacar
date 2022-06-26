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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="mainscreen.php">
                <img src="GoCar_Logo.jpg" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="mainscreen.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Services
      </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Discounts</a></li>
                            <li><a class="dropdown-item" href="#">Special Offers</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Occasions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    <li class="nav-item nav-right" style="float:right;">
                        <a href="register.php"></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br><br><br>
    <table class="table table-striped">
        <tr class="bg-info">
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>CNIC</th>
            <th>Phone</th>
            <th>Documents</th>
            <tbody id="fetch">

            </tbody>
        </tr>
    </table>
        <footer class="bg-light text-dark pt-5 pb-4">
            <div class="footer-container text-md-left">
                <div class="row text-md-left">
                    <div class="col-md-3 col-lg-3 colxl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Anout Us</h5>
                        <hr class="mb-4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Let Us Help</h5>
                        <hr class="mb-4">
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Your Account</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Your Bookings</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Manage Your Account</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Help</a>
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Become A Member</h5>
                        <hr class="mb-4">
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Become An Affiliate</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Registered Your Car on Our Website</a>
                        </p>
                        <p>
                            <a href="#" class="text-dark" style="text-decoration: none;">Self-Publish</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact</h5>
                        <hr class="mb-4">
                        <p>
                            <li class="fas fa-home mr-3"></li>Hasilpur, Punjab Pakistan
                        </p>
                        <p>
                            <li class="fas fa-envelope mr-3"></li>ismailtalha266@gmail.com
                        </p>
                        <p>
                            <li class="fas fa-phone mr-3"></li>03040059380
                        </p>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row d-flex justify-content-center">
                    <div>
                        <p class="text-center">
                            Copyright 2022 All Rights Reserved By:
                            <a href="#" style="text-decoration: none;">
                                <strong class="text-info">GoCar</strong>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="text-center">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-light">
                                    <li class="fab fa-facebook"></li>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light">
                                    <li class="fab fa-twitter"></li>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light">
                                    <li class="fab fa-google-plus"></li>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light">
                                    <li class="fab fa-gmail"></li>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="text-light">
                                    <li class="fab fa-linkedin-in"></li>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/fb76160704.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
        <script>
           subdata();
           
           function subdata(){
	        $.post("getcontrol.php", {
			
			
			action : 'getitems'
			
		}, function(result) {
            var output="";
			var temp = document.getElementById("fetch").innerHTML;
		
			var fres = jQuery.parseJSON(result);
            
			for (var i = 0; i < 10; i++) {
               
                output+='<tr>'
                output+='<td>'+fres['id'][i]+'</td>';
                output+='<td>'+fres['user'][i]+'</td>';        
                output+='<td>'+fres['email'][i]+'</td>';
                output+='<td>'+fres['pass'][i]+'</td>';
                output+='<td>'+fres['cnic'][i]+'</td>';
                output+='<td>'+fres['phone'][i]+'</td>';
                output+='<td>'+fres['choose'][i]+'</td>';
                output+='</tr>'
           
			}
            document.getElementById("fetch").innerHTML = output;	
		});
    }
 </script>
</body>

</html>