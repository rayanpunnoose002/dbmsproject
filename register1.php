<?php 

include 'config.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$Rpassword = md5($_POST['Rpassword']);

	if ($password == $Rpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (email, password)
					VALUES ('$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registeration compeleted.')</script>";
			} else {
				$_SESSION["error"] = "Woops! Something Wrong Went.";
           
			}
		} else {
			$_SESSION["error"] = "Woops! Email Already Exists.";
           
		}
		
	} else {
    $_SESSION["error"] = "Woops! Password Not Matched.";
  
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
    
          <h1 class="logo mr-auto"><a href="#">OXYMETRON NEW USER REGISTERATION</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#contact">Contact</a></li>
    
            </ul>
          </nav><!-- .nav-menu -->
    
          <a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a>
    
        </div>
      </header>
      <div style="margin-left: 30%; margin-right: 30%; margin-top: 150px;">
        <form action="" method="POST" >
          <div class="form-group" >
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <br>
              <label for="exampleInputPassword1"> Re-enter Password</label>
              <input name="Rpassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
            </div>

            <br>
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<p> <font color=red><span>$error</span></font> </p>";
                    }
                ?> 
            <button  name="submit" style="margin-left: 50%; margin-top: -31px;" type="submit" class="btn btn-primary">REGISTER</button> 
            <a href="./signupp.php">LOG IN</a>
          </form>

      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>