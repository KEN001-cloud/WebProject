<?php

namespace WebProject;

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

$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

$path = 'upload/' . $_FILES["resume"]["name"];
 move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
 $message = '
  <h3 align="center">WORK DETAILS</h3>
  <table border="1" width="100%" cellpadding="5" cellspacing="5">
   <tr>
    <td width="30%">Client Name</td>
    <td width="70%">'.$_POST["name"].'</td>
   </tr>
   <tr>
    <td width="30%">Email</td>
    <td width="70%">'.$_POST["email"].'</td>
   </tr>
   <tr>
    <td width="30%">Job Title</td>
    <td width="70%">'.$_POST["title"].'</td>
   </tr>
   <tr>
    <td width="30%">Subject</td>
    <td width="70%">'.$_POST["subject"].'</td>
   </tr>
   <tr>
    <td width="30%">Level Of Writing</td>
    <td width="70%">'.$_POST["level"].'</td>
   </tr>
   <tr>
    <td width="30%">Type of service</td>
    <td width="70%">'.$_POST["service"].'</td>
   </tr>
   <tr>
    <td width="30%">Number of Pages</td>
    <td width="70%">'.$_POST["pages"].'</td>
   </tr>
  </table>
 ';

//MAILER SETTINGS

 $mail = new PHPMailer;
 $mail->IsSMTP();        //Sets Mailer to send message using SMTP
 $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
 $mail->Port = '587';        //Sets the default SMTP server port
 $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
 $mail->Username ='academicanditwriters@gmail.com';     //Sets SMTP username
 $mail->Password ='academic))!';     //Sets SMTP password
 $mail->SMTPSecure = 'TSl';       //Sets connection prefix. Options are "", "ssl" or "tls"
 $mail->From = $_POST["email"];     //Sets the From email address for the message
 $mail->FromName = $_POST["name"];    //Sets the From name of the message
 $mail->AddAddress('academicanditwriters@gmail.com', 'Webslesson');  //Adds a "To" address
 $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
 $mail->IsHTML(true);       //Sets message type to HTML
 $mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
 $mail->Subject = 'ACADEMIC WRITERS ORDER';    //Sets the Subject of the message
 $mail->Body = $message;       //An HTML or plain text message body
 if($mail->Send())        //Send an Email. Return true on success or false on error
 {
  $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
  unlink($path);
 }
 else
 {
  $message = '<div class="alert alert-danger">There is an Error</div>';
 }

echo "message send";
?>