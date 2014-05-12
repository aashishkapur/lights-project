<?php ob_start(); ?>
<?php include('config.php') ?>
<?php 
	session_start();
	if (isset($_GET['ID']) ) {
		$postid = $_GET['ID'];
		$query =  "SELECT * FROM zavala1 WHERE ID='$postid'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		echo($row[5]);
		json_encode($row[5]);
	}
	else {
		$str = "BOSSASSBITCH";
		echo($str);
		json_encode($str);
	}
	
	//&& isValid($_GET['ID'])
	function isValid($str) { // Checks to see if it only contains a-z characters, numbers, @ sign, period and idk wat else
		return !preg_match('/[^A-Za-z0-9.@\\-$]/', $str);
	}	
?>