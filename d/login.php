<?php
include_once 'dbconnect.php';
session_start();
$uri=50;

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    header('location:index.php?id/'.'mode=create_idcard/permalink'.md5($uri));
 }

if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	if (!isset($email) || trim(strlen($email)) ==0) {
		header('location:'.'signin.php'.'?error_id=1');
        exit;
		$_SESSION['error']='Email field must not be empty';
		}		
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header('location:'.'signin.php'.'?error_id=2');
        exit;
      $_SESSION['error'] = 'Invalid email format';
    }
	if (!isset($password) || trim(strlen($password)) ==0) {
		header('location:'.'signin.php'.'?error_id=3');
        exit;

		$_SESSION['error']='Password field must not be empty';
		}

	if(!empty(trim($email)) && !empty(trim($password))){
		$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		// print_r($row);
		// exit();
		if (mysqli_num_rows($query)==1) {
			session_regenerate_id();
			$_SESSION['email'] = $row['email'];
			session_write_close();
		 header('location:index.php?id/'.'mode=create_idcard/permalink'.md5($uri));
		}

	}
}
?>