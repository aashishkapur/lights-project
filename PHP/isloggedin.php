<?php ob_start(); ?>
<?php include('config.php') ?>
<?php
	session_start();
	$is = false;
	if (isset($_SESSION["email"])) {
		$is = true;
	}
	echo(json_encode($is));
?>