<?php
session_start();

// require "config/database.php";

if(isset($_SESSION["faculty"]))
{
    echo "<script> location.replace('dashboard.php') </script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>Student Login</title>

    <style>
        .bg-image {
            background: url("../images/bg.jpg");
            background-blend-mode:luminosity;
            background-size: cover;
            background-color:antiquewhite;
        }
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
                            <a class="nav-link w-75 mx-auto" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light w-75 mx-auto" href="login.php" style="background: #FF970A;">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link w-75 mx-auto" href="addstudent.php">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        if (isset($_SESSION["login"])) {
        ?>
          <div class="row justify-content-center g-0">
            <div class="alert alert-danger alert-dismissible col-md-6 col-10 fade show mt-3" role="alert">
                <strong>Login Failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
        <?php
        }
        unset($_SESSION["login"]);
        ?>
        <div class="card text-center col-11 col-md-4 m-auto shadow py-4 border-warning">
            <!-- <div class="card-header bg-danger border border-danger">
            </div> -->
            <div class="card-body my-3">
                <h5 class="card-title text-uppercase lead mb-4 pb-1">Student Login</h5>
                <form id="login" method="post" action="facultylogin.php">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-12">
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                            <input type="text" class="form-control shadow-none" name="email" id="email" aria-label="Email">
                        </div>
                        </div>
                       <div class="col-md-10 col-12">
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control shadow-none" aria-label="Password">
                        </div>
                        </div>
                      <div class="col-md-10 col-12">
                        <div class="d-grid my-3">
                            <button class="btn text-white" onclick="return Validator();" style="background: #FF970A;" type="submit">Login</button>
                        </div>
                        </div>
					
					 <script>
     function Validator() {
         debugger;
         var flag = true;

       




      

         


         var email = document.getElementById('email').value;
         var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         if (!emailReg.test(email) || email == '') {
             alert('Please enter a valid email id.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }



         var pswd = document.getElementById('password').value;
         var pswdPattern = /^[A-Za-z0-9@]{5,}$/;
         if (!pswdPattern.test(pswd)) {
             alert('Please enter 8 characters password.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }



         return flag;
     }
 </script>
                    </div>
                </form>
            </div>
            <!-- <div class="card-footer bg-danger border border-danger">
            </div> -->
        </div>
        <div class="my-1"></div>

    </div>


    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

</body>

</html>