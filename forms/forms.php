<?php
        // define variables and set to empty values
        $nameErr = $emailErr = $subject=$titleErr= $pagesErr =$limitErr= "";
        $name = $email = $subject = $title = $pages = $subject = $limit="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["username"])) {
              $nameErr = "Name is required";
           }else {
              $name = test_input($_POST["username"]);
           }

           if (empty($_POST["email"])) {
              $emailErr = "Email is required";
           }else {
              $email = test_input($_POST["email"]);

              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $emailErr = "Invalid email format";
              }
           }

           if (empty($_POST["title"])) {
              $titleErr = " ";
           }else {
              $title = test_input($_POST["title"]);
           }

           if (empty($_POST["subject"])) {
              $subject = "";
           }else {
              $subject = test_input($_POST["subject"]);
           }

           if (empty($_POST["Level"])) {
              $subjectErr = "You must select a subject";
           }else {
              $subject = $_POST["Level"];
           }

           if (empty($_POST["pages"])) {
              $pagesErr = "Number Of Pages Required";
           }else {
              $pages = test_input($_POST["pages"]);
           }

        function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
     ?>
