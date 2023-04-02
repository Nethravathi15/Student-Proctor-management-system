<?php
session_start();

include "../config/database.php";


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  $proctor = trim($_GET["proctor"]);
    $selcheck = trim($_GET["selcheck"]);
	$selcheck=substr($selcheck,0,strlen($selcheck)-1);
	//echo $selcheck;
	$selcheckexp=explode(",",$selcheck);
	//echo count($selcheckexp);
	
	for($i=0;$i<count($selcheckexp);$i++)
	{
		$query = "update proctoring_student set Proctor='$proctor' where id=$selcheckexp[$i]";
		echo $query;
		mysqli_query($link,$query);
        $_SESSION["add"] = "success";
        echo"<script> location.replace('addproctor.php') </script>";
	}
/*
        $query = "insert into proctoring_student values('','$name','$gender','$usn','$semester','$department','$phone','$email')";

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
		*/
}
