<?php

try {

  require("PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");
    
  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "shareddevexton@gmail.com";
  $mail->Password = "DSFG435iGH83";
  $mail->SetFrom("shareddevexton@gmail.com");
  $mail->Subject = "Test";
  $mail->Body = "hello";
  $mail->AddAddress("shareddevexton@gmail.com");


  if(!$mail->Send()) {
      echo "Mailer Error";
  } else {
    echo "Message has been sent";
  }
}
catch(Exception $e) {
  echo "There was an error sendint the message.";
}

?>