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
    $department = $_POST["department"];

    $semester = $_POST["semester"];
    $semester = implode(",",$semester);
    $subject = $_POST["subject"];
    $subject = implode(",",$subject);

        $query = "insert into attend_2021_faculty values('','$name','$gender','$fid','$semester','$department','$subject','$phone','$email','$password')";

        if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('register.php') </script>";

        }
        else         
        {
            $_SESSION["add"] = "failed";
            echo"<script> location.replace('register.php') </script>";
        }

        

        mysqli_close($link);
}
