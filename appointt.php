<!--
Author: W3Layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include 'configappo.php';

session_start();

error_reporting(0);
$email = $_SESSION['email'];
$status="confirmed";
$sql = "SELECT DISTINCT * FROM appoint WHERE email='$email' and STATUS_1='$status' order by date DESC ";
$query = mysqli_query($conn,$sql);
$row = $query->fetch_assoc()

?>
<!DOCTYPE html>
<html>
<head>
<title>BOOKING</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Style --> 
<link href="./css/styleapp.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="./assets/css/appointment.css" rel="stylesheet">
</head>
<body >
	<header  id="header1" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo mr-auto">OXYMETRON BOOKING CARD</h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Home</a></li>
			  <li class="active"><a onclick="window.print();">Download<i class="icofont-download"></i></a></li>
              
              
              
    
            </ul>
          </nav><!-- .nav-menu -->
    
          
    
        </div>
      </header>

<div class="col-xl-12 d-flex align-items-stretch">
	 
	<div class="container1" style="background-image: linear-gradient(43deg, rgb(65, 88, 208) 0%, rgb(200, 80, 192) 30%, rgb(255, 204, 112) 66%, rgb(255, 255, 255) 100%);  height:330px">
		<h1>TODAY'S APPOINTMENT</h1>
	  <div class="paymentbox">
        
		<p >NAME OF PATIENT:</p>
		<span class="cvvv"></span> <?php echo $row['name']; ?>
        <br>
		<br>
		<p>EMAIL-ID:</p>
		<span class="cvvv"></span> <?php echo $row['email']; ?>
        <br>
		<br>
		<div class="exp">
		<p>BOOKING DATE&TIME</p>
		<span class="cvvv"></span> <?php echo $row['date']," & ",$row['time']; ?>
		</div>
        <div class="cvv" style="margin-top: -146px">
		    <p>TOKEN NO: &nbsp;&nbsp;<?php echo $row['token']; ?></p> 
		     <br>
			<p>HOSPITAL NAME:</p>
            <span></span> <?php echo $row['hospital']; ?>
			<br>
			<br>
            <p>BOOKING STATUS</p>	
            <span class="cvvv"></span> <?php echo $row['STATUS_1']; ?>
			<br>
			<br>
			<p>APPOINTMENT FOR:</p>
		<span class="cvvv"></span> <?php echo $row['doctor']; ?>
            </div> 

		<div class="clear"></div>

	</div>
	<div>
		<a onclick="window.print();">Download<i class="icofont-download"></i>
	</div>
	
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>