 <?php ob_start(); ?>
<?php include('config.php') ?>
 <?php 
	session_start();
	$max1 = $max2 = $max3 = 0;
	for ($x = 3; $x < 21; $x++) {
		$query = "SELECT * FROM zavala1 WHERE ID ='$x'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result); 
		if ($row[12][0] > $max1)
			$max1 = $x;
		else if ($row[12][0] > $max2)
			$max2 = $x;
		else if ($row[12][0] > $max3)
			$max3 = $x;
	}
	$arr = array (400);
	$query = "SELECT * FROM zavala1 WHERE ID ='$max1'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$arr[0] = array($row[1], $row[3][0],  $row[11][0]);
	$query = "SELECT * FROM zavala1 WHERE ID ='$max2'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$arr[1] = array($row[1], $row[3][0],  $row[11][0]);
	$query = "SELECT * FROM zavala1 WHERE ID ='$max3'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$arr[2] = array($row[1], $row[3][0],  $row[11][0]);
	

	
	echo(json_encode($arr));
	

 ?>
