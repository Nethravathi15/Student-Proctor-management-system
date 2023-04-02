<?php

  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'neyathip1612@gmail.com';                 // SMTP username
  $mail->Password = 'neyathi@123';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465; 
  $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


  $mail->setFrom('neyathip1612@gmail.com', 'E-Proctoring System');
  $mail->isHTML(true);
  
 ?>
