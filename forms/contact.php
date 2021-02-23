<?php
//define varibles and set to empty values

$name_error=$email_error=$phone_error=$url_error= "";
$name=$email=$phone=$message=$url=$success="";

//form is submitted with the post methods
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  // code...
  if (empty($_POST["name"])) {
    // code...
  } else {
    // code...
    $name=test_input($_POST["name"]);
    //check if name only conatins only letters and white space a
    if (!pre_match("/[a-zA-Z]*$/",$name)) {
      $name_error="Only Letter and White Space allowed";
    }
    }
    if (empty($_POST["email"])) {
      $email_error="Email is required";
    } else {
      $email=test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error="Invalid email format";
      }
    }

    if (empty($_POST["phone"])) {
      // code...
      $phone_error="Phone is Required";
    } else {
      // code...
    }

  }

} else {
  // code...
}




?>
