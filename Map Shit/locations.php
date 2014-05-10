<?php ob_start(); ?>
<?php include('config.php') ?>
<?php 
	session_start();
	$query = "SELECT * FROM zavala1";
	$result = mysql_query($query);
	$length= mysql_num_rows($result);
	$arr = array (700);
	
	for ($x = 1; $x <= $length; $x++) {
	
		$query =  "SELECT * FROM zavala1 WHERE ID='$x'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$arr[$x-1] =  array($row[7], $row[8]);
	}
	$json = json_encode($arr);
	echo $json;

?>
