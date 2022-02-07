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
        $_SESSION["sucess"] = "Registeration Sucessfull!!!.";
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="./assets/css/style1.css">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <div class="container px-4 py-5 mx-auto">
      <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
          <div class="card card1">
            <div class="row justify-content-center my-auto">
              <div class="col-md-8 col-10 my-5">
                <div class="row justify-content-center px-3 mb-3"> <img id="logo" style="height: 150px; width:200px" src="https://i.pinimg.com/736x/e6/37/30/e63730e773fbb66631e732f897c0310d.jpg"> </div>
                <h3 class="mb-5 text-center heading">We are team oximetron</h3>
                <h6 class="msg-info">Register your new account</h6>
                <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="email" placeholder="Phone no or email id" class="form-control"> </div>
                <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="password" placeholder="Password" class="form-control"> </div>
                <div class="form-group"> <label class="form-control-label text-muted">Re-enterpassword</label> <input type="password" id="psw" name="Rpassword" placeholder="password" class="form-control"> </div>
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
                <div class="row justify-content-center my-3 px-3"> <button type="submit" name="submit" class="btn-block btn-color">Register</button> </div>
                
              </div>
            </div>
            <div class="bottom text-center mb-5">
              <p href="#" class="sm-text mx-auto mb-3">already a member?<a href="./signupp.php" class="btn btn-white ml-2">Log in</a></p>
            </div>

          </div>
          <div class="card card2">
            <div class="my-auto mx-md-5 px-md-5 right">
              <h3 class="text-white">We are concerned about your health</h3> <small class="text-white">So Create a new account and Explore all your health status at your finger tip. <br> your's faithfully <br> Team Oximetron</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

</body>

</html>
<?php
unset($_SESSION["error"]);
unset($_SESSION["sucess"]);
?>