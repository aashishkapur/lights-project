<?php

	include ('config.php');

	if (isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query =  "SELECT * FROM `locations` WHERE id='$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$lat = $row['Latitude'];
		$lng = $row['Longitude'];

		$array = array('lat' => $lat, 'lng' => $long);
		echo json_encode($array);;
		//json_encode($array);
	}

?>