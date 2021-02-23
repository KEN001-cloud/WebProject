<?php
$message_sent=false;

if(isset($_POST['email']) && $_POST['email'] !=''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))

            //submit the form
            $userName=$_POST['name'];
            $userEmail=$_POST['email'];
            $messageSubject=$_POST['subject'];
            $message=$_POST['message'];


            $to="kennedykyalo2000@gmail.com";
            $body="";

            $body.="From:".$userName."\r\n";
            $body .= "From:" . $userEmail. "\r\n";
            $body .= "Message:" . $message . "\r\n";

            //mail($to, $messageSubject,$body);

            $message_sent=true;
    }
   else{

    }


?>



<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AcademicWriters-contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="file:///C:/Users/hp/Desktop/Mentor/indexA.html">Academic Writers</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="file:///C:/Users/hp/Desktop/Mentor/indexA.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contacts</a></li>
          <li><a href="courses.html">Samples</a></li>
          <li><a href="skills.html">Services</a></li>
          <li><a href="placeorder.html">Place Order</a></li>
      <a href="placeorder.html" class="get-started-btn">ORDER NOW</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Need any Assistsnce or Work clarification? Our customer support team is there for you <b>24/7</b> </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kennedykyalo20002000@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tell:</h4>
                <p>0728785868</p>
              </div>

            </div>

          </div>


        <?php
            if($message_sent){
                echo "message send, thanks";
            }
            else{
        http://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.phphttp://localhost/webproject/send_Mail.php else{
            
        }
        ?>


          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
                 
              <div> <button type="button" >Send Message</button></div>
          </div>

        </div>

      </div>

       </form>
       
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Academic Writers</h3>
            <p>
              D345 Lexy Street <br>
              Alberta, NY 535022<br>
              Canada <br><br>
              <b>Phone:</b> +254728785868<br>
              <b>Email:</b> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>More Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="file:///C:/Users/hp/Desktop/Mentor/indexA.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="skills.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Academic Writing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dissertaions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Examination Administration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Content Writing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Social Forums</h4>
            <p></p>
            <form action="contact.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <b><span>ACADEMIC WRITERS</span></b>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">AcademicWriters</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#twitter" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#facebook" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#instagram" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#googleplus" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#linkedin" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>
