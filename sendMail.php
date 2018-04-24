<?php

try {

  require("PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");
  
  $name= $_POST['name'];
  $email=  $_POST['email'];
  $message=  $_POST['message'];

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "shareddevexton@gmail.com";
  $mail->Password = "DSFG435iGH83";
  $mail->SetFrom("shareddevexton@gmail.com");
  $mail->Subject = "Message from Milly's Portfolio";
  $mail->Body = "This message is from: <b>". $name."</b>, email:  <i>".$email."</i><br><br>".$message;
  $mail->AddAddress("shareddevexton@gmail.com");


  if(!$mail->Send()) {
      echo "Mail has not been sent";
  } else {
    echo "Message has been sent";
  }
}
catch(Exception $e) {
  echo "There was an error sending the message.";
}

?>