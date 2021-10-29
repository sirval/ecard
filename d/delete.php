<?php
	session_start();
	include_once('dbconnect.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM customer WHERE customer_id = '".$_GET['id']."'";
		 if(mysqli_query($con, $sql)){
			header('location:'.'index.php'.'?succ=0');
            exit;
			}
		
		else{
			header('location:'.'index.php'.'?error_id=20');
            exit;
			}
	}
	else{
		
		header('location:'.'index.php'.'?error_id=21');
            exit;
        }

	header('location: index.php');
?>