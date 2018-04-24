<html>
 <head>
  <title>Mail</title>
 </head>
 <body>

 <?php

// Pear Mail Library
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//require_once "PHPMailer-master/src/PHPMailer.php";
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
  
//PHPMailer Object
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPAutoTLS = true;
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 
$mail->IsHTML(true);
$mail->Username = "shareddevexton@gmail.com";
$mail->Password = "DSFG435iGH83";
$mail->SetFrom("shareddevexton@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("shareddevexton@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
	
?>

 </body>
</html>