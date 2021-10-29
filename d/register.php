<?php
session_start();
include_once 'dbConnect.php';
if(isset($_POST['reg'])){
$name = $_POST['name'];
$email = $_POST['email'];
$college = $_POST['college'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$uri=60;

	if (!isset($name)  || trim(strlen($name)) < 4) {
        header('location:'.'signup.php'.'?error_id=1');
        exit;
         
      
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      header('location:'.'signup.php'.'?error_id=2'); 
      exit;
    }
    if (!isset($email) || trim(strlen($email)) ==0) {
           header('location:'.'signup.php'.'?error_id=3'); 
           exit;
     
    }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header('location:'.'signup.php'.'?error_id=4'); 
      exit;
      
     
    }
    
    if (!isset($college) || trim(strlen($college)) < 4) {
          header('location:'.'signup.php'.'?error_id=5');
          exit;
           
    }
    if (!isset($password) || trim(strlen($password)) <5)  {
      		header('location:'.'signup.php'.'?error_id=6');
          exit;
          
    }
    if (!isset($cpassword) || trim(strlen($cpassword)) ==0) {
         header('location:'.'signup.php'.'?error_id=7');
         exit;
         
      
    }
    if (isset($password) != (isset($cpassword))) {
          header('location:'.'signup.php'.'?error_id=8');
          exit;
          
    }
     
	   //check if email and password already exists
 $fetchrows = mysqli_query($con,"SELECT * FROM user WHERE password = '$password' AND email = '$email'");
		if (mysqli_num_rows($fetchrows)>0) {
			header('location:'.'signup.php'.'?error_id=9'); 
      exit;
		}


$sql=mysqli_query($con,"INSERT INTO user (name , college , email, password, cpassword) VALUES  ('$name'  , '$college','$email' , '$password', '$cpassword')");

if (mysqli_affected_rows($con)>0) {
 header('location:'.'signin.php'.'?reg_successful?id='.md5($uri)); 
      exit;

}
else
{
    header('location:'.'signup.php'.'?error_id=10'); 
      exit;
  }
}

?> 
