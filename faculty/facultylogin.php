<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

        $sql = 'SELECT proctoring_faculty_name FROM proctoring_faculty WHERE proctoring_faculty_email = ? AND proctoring_faculty_password = ?';

        if ($stmt = mysqli_prepare($link, $sql)) 
        {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);

            mysqli_stmt_execute($stmt);

            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) 
            {
                mysqli_stmt_bind_result($stmt, $name);
                mysqli_stmt_fetch($stmt);
                $_SESSION["faculty"] = $email;
                $_SESSION["facultyname"] = $name;
                echo"<script> location.replace('dashboard.php') </script>";
            } 
            else 
            {
                $_SESSION["login"] = "failed";
                echo"<script> location.replace('login.php') </script>";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
}
