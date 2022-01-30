<?php 

include 'configappo.php';

session_start();

error_reporting(0);

   
      

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
<body class="background">
<header id="header1" class="fixed-top" >
        <div class="container d-flex align-items-center">
    
          <h1 class="logo mr-auto"><a style=color:red ><h3>OXYMETRON  ADMIN APPOINTMENT HISTORY</h3></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
         <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="./admin7268.php">Home<i class="icofont-home"></i></a></li>
          
          <li><a href="./adminappointment.php">BOOKING HISTORY<i class="icofont-ambulance"></i></a></li>
          <li class="active"><a onclick="window.print();" >Download<i class="icofont-download"></i></a></li>
          <li><a href="#contact"><?php echo "<h4>Welcome " . $_SESSION['email'] . "</h4>"; ?> <i class="icofont-business-man-alt-1"></i></a></li>
          <li class="loading"><a href="./signupp.html">Sign Out<i class="icofont-sign-out"></i></a></li>
          

        </ul>
      </nav><!-- .nav-menu -->
    
          
    
        </div>
      </header>
    
    <table class="table table-sm table-dark">
<tr>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>date</th>
<th>time</th>
<th>district</th>
<th>hospital</th>
<th>department</th>
<th>doctor</th>
<th>message</th>
</tr>
<?php
$sql = "SELECT DISTINCT * FROM appoint";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>".  
$row["phone"]. "</td>".
"</td><td>".  $row["date"]. "</td>".
"</td><td>".  $row["time"]. "</td>".
"</td><td>".  $row["district"]. "</td>".
"</td><td>".  $row["hospital"]. "</td>".
"</td><td>".  $row["department"]. "</td>".
"</td><td>".  $row["doctor"]. "</td>".
"</td><td>".  $row["message"]. "</td></tr>";
}
echo "</table>";
} 
?>
</table>
          
        
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