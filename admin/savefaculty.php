<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = trim($_POST["name"]);
    $gender = trim($_POST["gender"]);
    $email = trim($_POST["email"]);
    $fid = trim($_POST["fid"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);
    //$department = $_POST["department"];

    //$semester = $_POST["semester"];
    //$semester = implode(",",$semester);
   // $subject = $_POST["subject"];
   // $subject = implode(",",$subject);

        $query = "insert into proctoring_faculty values('','$name','$gender','$fid','','','','$phone','$email','$password')";

        if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addfaculty.php') </script>";

        }
        else         
        {
            $_SESSION["add"] = "failed";
            echo"<script> location.replace('addfaculty.php') </script>";
        }

        

        mysqli_close($link);
}
