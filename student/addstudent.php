<?php
session_start();

require "../config/database.php";


// $username = $_SESSION["username"];
// $usergender = $_SESSION["usergender"];

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Dashboard">
  <meta name="author" content="Intrella">
  <meta name="generator" content="Intrella">
  <title>Student Register</title>



  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {
      font-size: .875rem;
    }

    .bg-cover {
      background-size: cover !important;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /*
 * Sidebar
 */

    .sidebar {
      position: fixed;
      top: 0;
      /* rtl:raw:
  right: 0;
  */
      bottom: 0;
      /* rtl:remove */
      left: 0;
      z-index: 100;
      /* Behind the navbar */
      padding: 48px 0 0;
      /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 5rem;
      }
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #727272;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
 * Navbar
 */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

  </style>
</head>

<body>

  <div class="d-flex flex-column min-vh-100 bg-cover" style="background:#eef2f3;">

    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background: #FF970A;">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center fw-bold" href="../index.php">E-Proctoring</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <input class="form-control bg-success w-100" type="text"  aria-label="Search" disabled> -->
      <div class="form-control w-100" style="background: #FF970A;"></div>
      <ul class="navbar-nav px-3">
      </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link home" aria-current="page" href="login.php">
                  <span data-feather="home"></span>
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link student active text-light" aria-current="page" href="addstudent.php"  style="background: #FF970A;">
                  <span data-feather="user-plus"></span>
                  Register
                </a>
              </li>
             
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h3 lead">Student Register</h1>
          </div>
          <?php
          if (isset($_SESSION["add"])) {
            if ($_SESSION["add"] == "success") {
          ?>
              <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <strong>Student Added Successfully!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
            } else if ($_SESSION["add"] == "failed") {
            ?>
              <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong>Student Adding Failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
            }
            ?>
          <?php
            unset($_SESSION["add"]);
          }
          ?>

          <form id="form" name="form" method="POST" action="savestudent.php" class="text-center" enctype="multipart/form-data">
            <h4 class="h4 text-center mb-4">Student Registration Form</h4>

            <div class="row justify-content-evenly">
              <div class="mb-3 col-md-4">
                <label class="form-label">Student Name :</label>
                <input type="text" class="form-control shadow-none" name="name" id="name" placeholder="Student Name" required="required" />
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label">Student Gender :</label>
                <select class="form-select shadow-none" name="gender" id="gender" required="required">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>

            <div class="row justify-content-evenly">
              <div class="mb-3 col-md-4">
                <label class="form-label">Student Email :</label>
                <input type="email" class="form-control shadow-none" name="email" id="email" placeholder="Student Email" required="required" />
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label">Student Usn :</label>
                <input type="text" class="form-control shadow-none" name="usn" id="usn" placeholder="Student Usn" required="required" />
              </div>
            </div>
			<!--
            <div class="row justify-content-evenly">
              <div class="mb-3 col-md-4">
                <label class="form-label">Select Semester :</label>
                <select class="form-select shadow-none" name="semester" id="semester" required="required">
                  <option value="I Semester">I Semester</option>
                  <option value="II Semester">II Semester</option>
                  <option value="III Semester">III Semester</option>
                  <option value="IV Semester">IV Semester</option>
                  <option value="V Semester">V Semester</option>
                  <option value="VI Semester">VI Semester</option>
                </select>
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label">Select Department :</label>
                <select class="form-select shadow-none" name="department" id="department" required="required">
                  <option value="BCA">BCA</option>
                  <option value="MCA">MCA</option>
                </select>
              </div>
            </div>
			-->
            <div class="row justify-content-evenly">
              <div class="mb-3 col-md-4">
                <label class="form-label">Student Phone :</label>
                <input type="text" class="form-control shadow-none" name="phone" id="phone" placeholder="Student Phone" required="required" />
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label">Password :</label>
                <input type="password" class="form-control shadow-none" name="pswd" id="pswd" placeholder="Password" required="required" />
              </div>
            </div>

            <div class="row justify-content-evenly mt-5">
              <div class="mb-3 col-md-4">
                <input type="submit" onclick="return Validator();" class="btn w-100 text-light" value="Create Account" name="butsave" id="butsave"  style="background: #FF970A;" />
              </div>
            </div>
 <script>
     function Validator() {
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
  var usn = document.getElementById('usn').value;
         var intRegex = /^[1-4]{1}[a-zA-Z]{2}[0-9]{2}[A-Za-z0-9]{3}[0-9]{2}$/;
         if (!intRegex.test(usn)) {
             alert('Please enter a valid usn number.');
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
		 
		 
		 
  var pswd = document.getElementById('pswd').value;
         var intRegex = /^[A-Za-z0-9]{5,8}$/;
         if (!intRegex.test(pswd)) {
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

          </form>

          <div class="my-1"></div>
        </main>

      </div>
    </div>


    <!-- <div class="wrapper flex-grow-1"></div>
<footer style="background:#eef2f3;" class="shadow">
  <p class="font-weight-bold text-center pt-1">© <script>document.write(new Date().getFullYear());</script> BLOOD BANK</p>
  </footer> -->

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  <script>
    // function previewFile(input) {
    //   debugger;
    //   var file = $("#getFile").get(0).files[0];

    //   if (file) {
    //     var reader = new FileReader();

    //     reader.onload = function() {
    //       $("#previewImg").attr("src", reader.result);
    //       $("#previewImg").addClass("img-thumbnail");
    //       $("#previewImg").show();
    //     }

    //     reader.readAsDataURL(file);
    //   }
    // }
    $(function(){

      

    });
  </script>


  <script>
    (function() {
      'use strict'

      feather.replace()


    })()
  </script>
</body>

</html>