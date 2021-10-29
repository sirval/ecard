<?php 
session_start();
		$_SESSION = array();
			session_write_close();
			unset($_SESSION['email']);
			unset($_SESSION['password']);
			session_unset();
			session_destroy();
			header('location:http://localhost/ecard');

exit;
?>