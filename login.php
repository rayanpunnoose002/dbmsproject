<?php 

include 'config.php';

session_start();
$error = "Oops!!! incorrect email or password";
error_reporting(0);


if (isset($_SESSION['username'])) {
  header("Location: index.php");
}


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if($email == 'admin1234@gamil.com')
		{  
			$row = mysqli_fetch_assoc($result);
			$_SESSION['email'] = $row['email'];
			header("Location: admin7268.php");
		}
	elseif ($result->num_rows > 0) {
		
			$row = mysqli_fetch_assoc($result);
		    $_SESSION['email'] = $row['email'];
		    header("Location: index.php");
		}else{
			$_SESSION["error"] = $error;
            header("location: signupp.php");
			
	}
}

?>



