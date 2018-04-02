<?php
require 'PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'] ;

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'portfolioictlisa';                 // SMTP username
$mail->Password = 'ditiseenwachtwoord';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Contactformulier portfolio';
$mail->Body = 'From: ' . $name . ' (' . $email . ')<p>' . $message . '</p>';
$mail->FromName = 'lisa';

$mail->AddAddress('portfolioictlisa@gmail.com');

if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else 
{
    echo 'Message has been sent';
}
?>