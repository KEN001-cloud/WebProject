
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Include PHPMailer Library Files

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//create an instance of PHPMailer class
$mail=new PHPMailer;

//SMTP configuration
$mail->isSMTP();
$mail->Host ='smtp.example.com';
$mail->SMTPAuth=true;
$mail->Username ='userexample.com';
$mail->password='******';
$mail->SMTPSecure='tls';
$mail->Port=587;

//Sender Info

$mail->setFrom('sender@example.com', 'SenderName');
$mail->addReplyTo('reply@example.com', 'SenderName');


//Add Recipient
$mail->addAddress('recipient@example.com');

//Add cc or bcc

$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

//Email Subject

$mail->Subject='Send Email via SMTP using PHPMailer';

//set email format to HTML

$mail->isHTML(true);

//Email body content

$mailContent='';
$mail->Body=$mailContent;

//Send email

if(!$mail->send()){
    echo 'Message could not be sent. Mailed Error: ' .$mail->ErrorInfo;

}
else{
    echo 'Message has been sent.';
}

//Add Attachments

$mail->addAttachment('files/codeworld.pdf');
$mail->addAttachment('ken.pdf');
$mail->addAttachment('images/codeworld.png', 'new-name.png');

//Send Multiple Recipients

$mail->addAddress('kennedykyalo2000@gmail.com','Kenedy Kyalo');






?>