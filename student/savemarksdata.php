<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $subject = trim($_POST["subject"]);
    $internals = trim($_POST["internals"]);
    $mrks = trim($_POST["mrks"]);
	$email=$_SESSION["faculty"];

        $query = "insert into proctoring_marks values('','$email','$subject','$internals','$mrks')";
		echo $query;

        if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('dashboard.php') </script>";

        }
        else         
        {
            $_SESSION["add"] = "failed";
            echo"<script> location.replace('dashboard.php') </script>";
        }

        

        mysqli_close($link);
}
