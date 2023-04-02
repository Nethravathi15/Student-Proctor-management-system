<?php

session_start();

require "../config/database.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// $email = $_SESSION['user_email'];
$fname =$_SESSION["facultyname"];
$query = "select * from proctoring_student where Proctor='$fname'";
$notify=$_GET['notify'];
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_array($result)) {
	$inputEmail = $row['proctoring_student_email'];
	$mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "neyathip1612@gmail.com";
        $mail->Password   = "neyathi@123";
        $mail->IsHTML(true);
        $mail->AddAddress($inputEmail,"name");
        $mail->SetFrom("neyathip1612@gmail.com", "E-Proctoring");
        $mail->AddReplyTo("neyathip1612@gmail.com", "E-Proctoring");
        $mail->Subject = "Notification from E-Proctoring System";
        $content = "<h3> Notification :".$notify."  </h3>";
        $mail->MsgHTML($content);

        if (!$mail->Send()) 
        {
            $_SESSION["mailsend"] = "success";
            //echo "<script> alert('mail not sent') </script>";
		    echo"<script> location.replace('notify.php') </script>";
        } 
        else 
        {
            $_SESSION["mailsend"] = "failed";
            //echo "<script> alert('mail sent') </script>";
		    echo"<script> location.replace('notify.php') </script>";
        }
}
?>