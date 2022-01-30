<?php 

include 'configappo.php';

session_start();

error_reporting(0);

if (isset($_SESSION['name'])) {
  header("Location: signupp.html");
 }
      

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/appointment.css" rel="stylesheet">
    <link href="./assets/css/table.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/back.css">
    
    
    <title>History </title>
</head>
<body >
    <header id="header1" class="fixed-top" >
        <div class="container d-flex align-items-center">
    
          <h1 class="logo mr-auto"><a href="index.php"><h3>OXYMETRON ADMIN PAGE</h3></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
         <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home<i class="icofont-home"></i></a></li>
          
          <li><a href="./adminappointment.php">BOOKING HISTORY<i class="icofont-ambulance"></i></a></li>
          <li><a href="./adminhealth.php">ReportInsertion<i class="icofont-hospital"></i></a></li>
          <li><a href="#doctors">Doctors<i class="icofont-doctor"></i></a></li>
           <li class="drop-down"><a href=""><i class="icofont-bell-alt"></i> </a>
            <ul>
              <li><a href="./appointtt.php">My Booking<i class="icofont-book-alt"></i></a></li>
              <li><a href="./emergency .html">Emergency<i class="icofont-ambulance-cross"></i></a></li>
              <li><a href="./ambulance booking.html">Ambulance Booking<i class="icofont-ambulance"></i></i></a></li>
              <li><a href="./table.php">History<i class="icofont-history"></i></i></a></li>
              <li><a href="./medicinebooking.html">Medicine Booking<i class="icofont-capsule"></i></i></a></li>
              <li class="drop-down"><a href="#">Recent visits<i class="icofont-history"></i></a>
                  <ul><a href="#"><i class="icofont-history"></i>Booking made on 11/01/2021 at medical college kottayam</a> </li>
                  <li><a href="#"><i class="icofont-history"></i>Booking made on 10/03/2021 at caritas hospital kottayam</a></li>
                  <li><a href="#"><i class="icofont-history"></i>Booking made on 01/06/2021 at medical college kottayam</a></li>
                  <li><a href="#"><i class="icofont-history"></i>Booking made on 16/07/2021 at medical college kottayam</a></li>
                  <li><a href="#"><i class="icofont-history"></i>Booking made on 21/08/2021 at medical college kottayam</a></li>
                </ul>
              </li>
              <li><a href="#">My account<i class="icofont-bag-alt"></i></a></li>
              <li><a href="#">payments<i class="icofont-pay"></i></a></li>
              <li><a href="#">user info<i class="icofont-info"></i></a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact<i class="icofont-ui-call"></i></a></li>
          <li><a href="#contact"><?php echo "<h4>Welcome " . $_SESSION['email'] . "</h4>"; ?> <i class="icofont-business-man-alt-1"></i></a></li>
          <li class="loading"><a href="./signupp.php">Sign Out<i class="icofont-sign-out"></i></a></li>
          

        </ul>
      </nav><!-- .nav-menu -->
    
          
    
        </div>
      </header>
    
      <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to OXYMETRON</h1>
      <h2>Your All In One Health Care Website</h2>
      <a href="#services " class="btn-get-started scrollto"><?php echo "<h4>Welcome " . $_SESSION['email'] . "</h4>"; ?></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Recent covid cases</h3>
              <p>
                India Coronavirus update with statistics and graphs: total and new cases, deaths per day, mortality and recovery rates, current active cases, recoveries, trends and timeline.
              </p>
              <div class="text-center">
                <a href="https://www.ndtv.com/coronavirus/india-covid-19-tracker" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-heart-beat-alt"></i>
                    <h4>Oxygen availability</h4>
                    <p>Kerala has increased its oxygen availability by 58% over the last one year. While daily oxygen currently available with the government hospitals is at 219.22 metric tonnes.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-prescription"></i>
                    <h4>Online Appointments</h4>
                    <p>Book your appointment with our doctors.  Arthroscopy & Sport Surgery Cardiology Cardiothoracic Surgery Clinical Oncology Dermatology Ear, Nose & Throat Surgery  ...</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-law-book"></i>
                    <h4>Bookings instruction</h4>
                    <p>
                      please make sure that you must make booking atleast 12 hours before the appointments to be made. kindlly download a copy of the reciept of the booking while visting the hospital
  
                    </p>

                  
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
          
        
      <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>