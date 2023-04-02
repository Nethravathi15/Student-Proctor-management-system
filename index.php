<?php
session_start();

// require "config/database.php";

if(isset($_SESSION["faculty"]))
{
    echo "<script> location.replace('faculty/dashboard.php') </script>";
}
elseif(isset($_SESSION["admin"]))
{
    echo "<script> location.replace('admin/dashboard.php') </script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>Home</title>

    <style>
  
    </style>

</head>

<body>
        <div class="min-vh-100 d-flex flex-column bg-image">
        <nav class="navbar navbar-light shadow-sm mb-2" style="background: #FF970A;">
            <div class="container-fluid">
                <span class="lead text-light fw-bold">E-Proctoring</span>
                <a class="ms-auto btn btn-outline-light border" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu" style="border-color: #FF970A;">
                    <span class="navbar-toggler-icon"></span>
                </a>
            </div>
            <div class="offcanvas offcanvas-end shadow-sm" data-bs-scroll="true" tabindex="-1" id="menu" aria-labelledby="menuLabel">
                <div class="offcanvas-header" style="background: #FF970A;">
                    <h5 class="offcanvas-title lead fw-bold ms-auto text-light" id="menuLabel">MENU</h5>
                    <button type="button" class="btn-close border text-reset btn-outline-light" data-bs-dismiss="offcanvas" aria-label="Close" style="border-color: #FF970A;"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav text-center lead fw-bold">
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./admin/login.php">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./faculty/login.php">Faculty Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="./student/login.php">Student Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		
		 <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<img src="images/bg1.jpeg"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%;"/>
<br/>

			 

</div>
</div>



</body>

</html>