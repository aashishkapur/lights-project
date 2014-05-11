<?php ob_start(); ?>
<?php
session_start();
	echo($_SESSION['user']);
	$seconds = -1000 + time();
	setcookie(loggedin, date("F jS - g:i a"), $seconds);

		session_destroy(); 
			header("location:../index.html");
?>
<?  ob_flush(); ?>
