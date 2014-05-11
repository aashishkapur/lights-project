<?php ob_start(); ?>
<?php include('config.php') ?>
<?php
	session_start();
	if(!isset($_SESSION['email'])) {
		header("location: index.html");
	}
	mysql_query("ALTER TABLE `posts` DROP `ID`");
	mysql_query("ALTER TABLE `posts` AUTO_INCREMENT = 0");
	mysql_query("ALTER TABLE `posts` ADD `ID` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
	if (isset($_GET['ID']))
		$postid = $_GET['ID'];
	else if (isset($_GET['id']))
		$postid = $_GET['id'];
	else if (isset($_GET['Id']))
		$postid = $_GET['Id'];
	$query =  "SELECT * FROM users WHERE ID='$postid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	json_encode($row);
?>