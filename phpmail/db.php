<?php
//include('config.inc.php');

$con = new mysqli('localhost','root','', 'prostranscription');

if($con -> connect_error) {
    die("Error" . $con -> connect_error);
}



?>