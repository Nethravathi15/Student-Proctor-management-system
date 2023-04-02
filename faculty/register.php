<?php
session_start();

// require "config/database.php";

if (isset($_SESSION["faculty"])) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Faculty Register</title>

    <style>
        .bg-image {
            background: url("../images/bg.jpg");
            background-blend-mode: luminosity;
            background-size: cover;
            background-color: antiquewhite;
        }
    </style>

</head>

<body>
    <div class="min-vh-100 d-flex flex-column bg-image">
        <nav class="navbar navbar-light shadow-sm mb-2" style="background: #FF970A;">
            <div class="container-fluid">
                <span class="lead text-light fw-bold">E-Attendance</span>
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
                            <a class="nav-link w-75 mx-auto" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light w-75 mx-auto" href="register.php" style="background: #FF970A;">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
          if (isset($_SESSION["add"])) {
            if ($_SESSION["add"] == "success") {
          ?>
          <div class="row g-0 justify-content-center">
              <div class="alert col-sm-6 alert-success alert-dismissible fade show mt-2" role="alert">
                <strong>Faculty Added Successfully!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
            <?php
            } else if ($_SESSION["add"] == "failed") {
            ?>
            <div class="row g-0 justify-content-center">
              <div class="alert col-sm-6  alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong>Faculty Adding Failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              </div>
            <?php
            }
            ?>
          <?php
            unset($_SESSION["add"]);
          }
          ?>
        <div class="card text-center col-11 col-sm-6 m-auto shadow py-4 border-warning">
            <!-- <div class="card-header bg-danger border border-danger">
            </div> -->
            <div class="card-body my-3">
                <h5 class="card-title text-uppercase lead mb-4 pb-1">Faculty Registration</h5>
                <form id="login" method="post" action="facultyregister.php">
                    <div class="row justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                                    <input type="text" class="form-control" name="name" id="name" aria-label="Name" placeholder="Full Name" pattern="[A-Za-z ]{3,30}" title="min 3 chars - max 30 chars" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                                    <input type="text" name="fid" id="fid" class="form-control" pattern="[a-zA-Z0-9]+" placeholder="Faculty Id" required>
                                </div>
                            </div>
							<!--
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-day"></i></span>
                                    <select class="form-control border shadow-none selectpicker" name="semester[]" id="semester" required="required" title="Select Semester" multiple>
                  <option value="I Semester">I Semester</option>
                  <option value="II Semester">II Semester</option>
                  <option value="III Semester">III Semester</option>
                  <option value="IV Semester">IV Semester</option>
                  <option value="V Semester">V Semester</option>
                  <option value="VI Semester">VI Semester</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-th-large"></i></span>
                                    <select class="form-select shadow-none" name="department" id="department" required="required">
                                        <option value="">Select Department</option>
                  <option value="BCA">BCA</option>
                  <option value="MCA">MCA</option>
                                    </select>
                                </div>
                            </div>
							-->
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="phone" id="phone" class="form-control" aria-label="Phone Number" placeholder="Phone Number" pattern="(6|7|8|9)[0-9]{9}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
						<!--
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-table"></i></span>
                                    <select class="form-control border shadow-none selectpicker" name="subject[]" id="subject" required="required" title="Select Subject" multiple>
                                        <option>Java</option>
                                        <option>ADA</option>
                                        <option>CPP</option>
                                        <option>C</option>
                                        <option>DBMS</option>
                                    </select>
                                </div>
                            </div>
							-->
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                    <input type="text" class="form-control" name="email" id="email" aria-label="Email" placeholder="Email" required>
                                </div>
                            </div>
							
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" aria-label="Password" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
						<!--
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" aria-label="Password" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>
						-->
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-12">
                                <div class="d-grid mt-3 mb-1">
                                    <button class="btn text-white" style="background: #FF970A;" type="submit" onclick="return Validate()" >Create Account</button>
                                </div>
                            </div>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        
 $(document).ready(function () {
        $("#email").change(function () {
            var emailval = document.getElementById('email').value;
            var emailval1 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
           if(!emailval1.test(emailval) || email == '')
                {
                alert('Please enter a valid email id.');
				 $("#email").focus();
                return false;
            }
        });
    });
      
    </script>
<script>
    function Validate() {
         debugger;
         var flag = true;

    

         var namer = document.getElementById('name').value;
         var intRegexnamer = /^[A-Za-z ]+$/;
         if (!intRegexnamer.test(namer)) {
             alert('Please enter a valid name.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }



    var fid = document.getElementById('fid').value;
         var intRegexnamer = /^[A-Za-z]{2}[0-9]{3}$/;
         if (!intRegexnamer.test(fid)) {
             alert('Please enter a valid fid.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }
           var phone = document.getElementById('phone').value;
         var intRegex = /^(6|7|8|9)[0-9]{9}$/;
         if (!intRegex.test(phone)) {
             alert('Please enter a valid phone number.');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }
 		
       
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

		 var pswd = document.getElementById('pswd').value;	

         var pswdPattern = /^[A-Za-z0-9]{5,}$/;
         if (!pswdPattern.test(pswd)) {
             alert('Please enter a valid password number with min 5 max 8 characters');
             flag = false;
             return flag;
         }
         else {
             flag = true;
         }
		 
		 
		 
		



         return flag;
    }
</script>
</body>

</html>