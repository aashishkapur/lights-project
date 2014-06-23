<?php

	include ('config.php');

	if (isset($_GET['ID']))
	{
		$id = $_GET['ID'];
		$query =  "SELECT * FROM `locations` WHERE ID='$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$lat = $row['Latitude'];
		$long = $row['Longitude'];
		echo "lat: $lat, long: $long";
		json_encode($row['Latitude']);
	}

?>