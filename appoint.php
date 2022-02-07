<?php 

include 'configappo.php';

session_start();

error_reporting(0);


if (isset($_SESSION['name'])) {
 header("Location: appointment.php");
}


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_SESSION['email'];
    $phone= $_POST['phone'];
    $date= $_POST['date'];
    $time= $_POST['time'];
    $district= $_POST['district'];
    $hospital= $_POST['hospital'];
    $department= $_POST['department'];
    $doctor= $_POST['doctor'];
    $message=$_POST['message'];
    $STATUS_1='pending';
    $token='0';
        
        
        
        if($name !=NULL &&($email!=NULL && $phone!=NULL && $date!=NULL && $time!=NULL && $district!=NULL && $hospital!=NULL && $department!=NULL && $doctor!=NULL && $message!=NULL))
        {
            
            $sql = "INSERT INTO appoint (name, email,phone,date,time,district,hospital,department,doctor,message,STATUS_1,token)
                VALUES ('$name', '$email','$phone','$date','$time','$district','$hospital','$department','$doctor','$message','$STATUS_1','$token')";
            $result = mysqli_query($conn,$sql);
        }else{
            echo "<script>alert('enter all data')</script>";
        }
        if($result) {
            echo "<script>alert('appointment done...')</script>";
        }else{
            echo "<script>alert('Oops something wrong please try again.....')</script>";
        }
        
    
}

?>
