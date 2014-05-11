 <?php ob_start(); ?>
<?php include('config.php') ?>
 <?php 
	session_start();
	
	$email = $_SESSION["email"] ; 
	$query = "SELECT * FROM users";
	$result = mysql_query($query);
	$length =  mysql_num_rows($result);
	$arr = array (70000);
	$count = 0;
	for ($x = 1; $x <= $length; $x++) {
		$subquery = "SELECT * FROM users WHERE ID=$x";
		$subres = mysql_query($subquery);
		$wtf = mysql_fetch_array($subres); // Think it fetches some random array from somewhere not sure
		if ($wtf[1] == $email) {

		}
		else {
		
			$query = "SELECT * FROM users WHERE Email ='$email'";
			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			$id = $row[0];
			$str = $wtf[3] . " - " . $wtf[1] . " ( ";
	
			if ($wtf[$id] == 1)
				$str .= "Friends)";
			$arr[$count] =$str; 
			$count++;
		}
	}
	if (count($arr == 0)) 
		json_encode("OMGOMGOMG");

	echo(	json_encode($arr));

	
	
 ?>