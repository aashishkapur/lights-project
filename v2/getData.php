<?php

	include ('config.php');
	header('Content-type: application/json');
	if (isset($_GET['id']))
	{
		$id = intval($_GET['id']);
		$query =  "SELECT * FROM `locations` WHERE id='$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$lat = $row['Latitude'];
		$lng = $row['Longitude'];

		$array = array("lat" => $lat, "lng" => $lng);
		echo json_encode($array);
		//json_encode($array);
	}
	else
		echo "{}";

?>