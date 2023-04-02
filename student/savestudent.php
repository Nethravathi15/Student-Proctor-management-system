<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = trim($_POST["name"]);
    $gender = trim($_POST["gender"]);
    $email = trim($_POST["email"]);
    $usn = trim($_POST["usn"]);
    //$semester = trim($_POST["semester"]);
    //$department = trim($_POST["department"]);
    $phone = trim($_POST["phone"]);
    $pswd = trim($_POST["pswd"]);

        $query = "insert into proctoring_student values('','$name','$gender','$usn','','','$phone','$email','$pswd','--')";
		echo $query;

        if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addstudent.php') </script>";

        }
        else         
        {
            $_SESSION["add"] = "failed";
            echo"<script> location.replace('addstudent.php') </script>";
        }

        

        mysqli_close($link);
}
