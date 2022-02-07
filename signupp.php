<?php

session_start();



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
    <form action="login.php" method="post"><div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <img id="logo" style="height: 150px; width:200px" src="https://i.pinimg.com/736x/e6/37/30/e63730e773fbb66631e732f897c0310d.jpg"> </div>
                            <h3 class="mb-5 text-center heading">We are team oximetron</h3>
                            <h6 class="msg-info">Please login to your account</h6>
                            <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="email" placeholder="Phone no or email id" class="form-control"> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="password" placeholder="Password" class="form-control"> </div>
                            <?php
                              if (isset($_SESSION["error"])) {
                                $error = $_SESSION["error"];
                                echo "<p> <font color=red><span>$error</span></font> </p>";
                                   }
                                      ?>
                            <div class="row justify-content-center my-3 px-3"> <button type="submit" name="submit" class="btn-block btn-color">Login </button> </div>
                            <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
                            
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p href="#" class="sm-text mx-auto mb-3">Don't have an account?<a href="./register1.php" class="btn btn-white ml-2">Create new</a></p>
                    </div>
        
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">Explore you health </h3> <small class="text-white">By making your bookings,view your health history,view your booking status,etc in any hospital in kerela ,we make every things simple for you <br> your's faithfully, <br> Team oximetron </small>
                    </div>
                </div>
            </div>
        </div>
    </div></form>
    
</body>
</html>

<?php
unset($_SESSION["error"]);
?>

