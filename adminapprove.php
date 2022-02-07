<?php

include 'configappo.php';

session_start();

error_reporting(0);



if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $status = $_POST['status'];
  $time_1 = $_POST['time'];
  $token = $_POST['token'];
  $email=$_POST['email'];

  $sql = "UPDATE appoint SET STATUS_1 = '$status',token='$token'  WHERE name = '$name' AND time = '$time_1' AND email = '$email' ";
  $result = mysqli_query($conn, $sql);
  if ($result && ($status != NULL && $time_1 != NULL && $name != NULL && $token!= NULL )) {
    $_SESSION["sucess"] = "Updated sucesssfully!!!.";
  } else {
    $_SESSION["error"] = "Woops! Something Wrong Went.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/appointment.css" rel="stylesheet">

</head>

<body>
  <header id="header1" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a style=color:red>OXYMETRON REPORT INSERTION</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="admin7268.php">Home</a></li>
          <li><a href="#contact">Contact</a></li>


        </ul>
      </nav><!-- .nav-menu -->



    </div>
  </header>
  <div style="margin-left: 30%; margin-right: 30%; margin-top: 150px;">
    <form action="" method="post" role="form" class="php-email-form">
      <div class="form-row">
        <div class="col-md-4 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
          <input type="text" class="form-control" name="status" id="date" placeholder="status" data-rule="email" data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
          <input type="text" class="form-control" name="time" id="date" placeholder="time" data-rule="email" data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
          <input class="form-control" name="token" placeholder="Token no"></input>
          <div class="validate"></div>
        </div>
        <div class="col-md-4 form-group">
          <input class="form-control" name="email" placeholder="E-mail"></input>
          <div class="validate"></div>
        </div>

        <div class="mb-4">
          <div class="text-center"><button class="btn btn-danger" name='submit' type="submit">Submit</button></div>
        </div>

        <?php
        if (isset($_SESSION["error"])) {
          $error = $_SESSION["error"];
          echo "<p> <font color=red><span>$error</span></font> </p>";
        }
        if (isset($_SESSION["sucess"])) {
          $sucess = $_SESSION["sucess"];
          echo "<p> <font color=green><span>$sucess</span></font> </p>";
        }
        ?>


    </form>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
unset($_SESSION["error"]);
unset($_SESSION["sucess"]);
?>