<?php ob_start(); ?>
<?php include('config.php') ?>
<?php 
	session_start();
	if (isset($_GET['name']) ) 
		$name = $_GET['name'];
	if (isset($_GET['comfort']) ) 
		$comfort = $_GET['comfort'];
	if (isset($_GET['food']) ) 
		$food = $_GET['food'];
	if (isset($_GET['power']) ) 
		$power = $_GET['power'];
	if (isset($_GET['medical']) ) 
		$medical = $_GET['medical'];
	if (isset($_GET['space']) ) 
		$space = $_GET['space'];
	if (isset($_GET['stability']) ) 
		$stability = $_GET['stability'];
	if (isset($_GET['water']) ) 
		$water = $_GET['water'];
	if (isset($_GET['clothing']) ) 
		$clothing = $_GET['clothing'];
	if (isset($_GET['sanitation']) ) 
		$sanitation = $_GET['sanitation'];
	if (isset($_GET['completion']) ) 
		$completion = $_GET['completion'];
	$query = "SELECT * FROM zavala1 WHERE Name ='$name'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$num = $row[2];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $comfort)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	
	mysql_query("UPDATE zavala1 SET = '$comfort' WHERE Name = '$name'");
	
	$num = $row[3];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $food)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $food WHERE Name = '$name'");
	
	$num = $row[4];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $power)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $power WHERE Name = '$name'");
	
	$num = $row[5];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $medical)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $medical WHERE Name = '$name'");
	
	$num = $row[6];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $space)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $space WHERE Name = '$name'");
	
	$num = $row[9];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $stability)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $stability WHERE Name = '$name'");
	
	$num = $row[10];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $water)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $water WHERE Name = '$name'");
	
	$num = $row[11];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $clothing)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $clothing WHERE Name = '$name'");
	
	$num = $row[12];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $sanitation)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $sanitation WHERE Name = '$name'");
	
	$num = $row[13];
	$nu1 = $num[0];
	$num = intval(substr($num, 2));
	if ($num ==0)
		$num++;
	$fin = (($num * $nu1) + $completion)/$num;
	$str  = intval($fin) . ":" . ($num + 1);
	mysql_query("UPDATE zavala1 SET = $completion WHERE Name = '$name'");
	
	echo("DONE");
	
?>