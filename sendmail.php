<?php
namespace WebProject;
session_start();

header('Access-Control-Allow-Origin: *');
//header("Content-Type: text/html; charset=UTF-8");
//header("Access-Control-Allow-Methods: POST");
//header("Access-Control-Max-Age: 3600");
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requested-With");

include('./vendor/autoload.php');
include('./pass.php');

use PHPMailer\PHPMailer\PHPMailer;

use Dotenv;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


if(isset($_POST['name'])&& isset($_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
  

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password     
$mail->Username = "academicanditwriters@gmail.com";
$mail->Password =$pass;
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls"; 
//Set TCP port to connect to
$mail->Port = 587;

//$mail->addAddress("seletemoses@gmail.com", "Moses");
//$mail->addAddress("itliveresearchers@gmail.com ");

$mail->isHTML(true);
$mail->addAddress("academicanditwriters@gmail.com", "Academic Writers");
$mail->setFrom($email, $name);
$mail->Subject=$subject;
$mail->Body=$message;

//$mail->addAddress("kenedylucky2021@gmail.com");
//$mail->isHTML(true);
//$mail->Subject = "Welcome To Academic Writers";
//$mail->Body = "We offer the best Freelancing work force! click Ordre Now";
//$mail->AltBody = "Welcome to academic writers. sign in today!";
//ADD ATTACHMENTS
//$mail->addAttachment("thanks");
//$mail->addAttachment("");
//$mail->addAttachment("");

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: ";
}
}
?>