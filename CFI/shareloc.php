 <?php ob_start(); ?>
<?php include('config.php') ?>
 <?php 
	session_start();
	$email = $_SESSION['email'];
	if (isset($_GET['lat']) ) 
		$lat = $_GET['lat'];
	if (isset($_GET['long']) ) 
		$long = $_GET['long'];
	$t=time();
	mysql_query("UPDATE users SET Latitude= $lat WHERE Email = '$email'");
	mysql_query("UPDATE users SET Longitude= $long WHERE Email = '$email'");
	mysql_query("UPDATE users SET Time= $t WHERE Email = '$email'");
	
	echo(json_encode($t));

 ?>
