<?php

include('db.php');

function send_mail(){
    /*global $con;
    $username = htmlspecialchars($_POST["users"]);
    $sql = 'SELECT * FROM users WHERE username = "'. $username .'" ';
    $record = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($record);
    echo $row["email"];*/
    
    //maller server test code
include ("PHPMailerAutoload.php");
//Create an object for php mailer (instance)
$mail= new PHPMailer;  
//enable smtp
$mail->isSMTP(); //DISSABLE IF USING A LIVE HOST
//host
$mail->Host="smtp.gmail.com"; 
//port 465   if you use ssl
$mail->Port=587 || 465;  
$mail->SMTPAuth=true;
//tls port>587  or ssl port >465
$mail->SMTPSecure="tls"; 
//sender email address
$mail->Username="4eyestimo@gmail.com"; 
//allow use less secure apps (sender passwor)
$mail->Password="mr hacker";

//email of sender and username
$mail->setFrom("4eyestimo@gmail.com", "ProsTranscription");
//recerver
$mail->addAddress( $email );


//USE HTML TAG
$mail->isHTML(true);

//mail subject
$mail->Subject="Job Alert";
$mail->Body ='<h1 align=center> Welcome To Mail Server</h1><br> <h4 align=center>am testing this code</h4> <br> <p style="color:red;">This is a red color and i like it not</p>';
//send the mail
$mail->send();

//check for errors
if (!$mail->send()) {
 echo "messeage not sent";
} else {
    echo "messeage is sent";
}
}



?>
