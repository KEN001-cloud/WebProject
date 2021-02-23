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
use PHPMailer\PHPMailer\Exception;
use Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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
$mail->Username = "kennedykyalo2000@gmail.com";
$mail->Password = $pass;
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Set TCP port to connect to
$mail->Port = 587;

$sender = "kennedykyalo2000@gmail.com";
$mail->setFrom($sender, "Ken");

$mail->addAddress("seletemoses@gmail.com", "Mosess");
$mail->addAddress("itliveresearchers@gmail.com ");
$mail->addAddress("");
$mail->addAddress("seletemoses@gmail.com");



$mail->isHTML(true);

$mail->Subject = "Welcome To Academic Writers";
$mail->Body = "We offer the best Freelancing work force! click Ordre Now";
$mail->AltBody = "Welcome to academic writers. sign in today!";

//ADD ATTACHMENTS
$mail->addAttachment("");
$mail->addAttachment("");
$mail->addAttachment("");

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;

}
?>