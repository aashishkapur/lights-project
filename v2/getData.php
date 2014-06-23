<?php

	include ('config.php');
	header('Content-type: application/json');
	if (isset($_GET['id']))
	{
		$id = intval($_GET['id']);
		$query =  "SELECT * FROM `locations` WHERE id='$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);

		// $lat = $row['Latitude'];
		// $lng = $row['Longitude'];
		// $array = array("lat" => $lat, "lng" => $lng);

		$array = array(
			"name" => $row['Name']
			"lat" => $row['Latitude'], 
			"lng" => $row['Longitude'], 
			"comfort" => $row['Comfort'],
			"food" => $row['Food'], 
			"power" => $row['Power'], 
			"space" => $row['Space'], 
			"stability" => $row['Stability'], 
			"water" => $row['Water'], 
			"clothing" => $row['Clothing'], 
			"sanitation" => $row['Sanitation'], 
			"completion" => $row['Completion'], 
			"name" => $row['Name']
			);


		echo json_encode($array);
		//json_encode($array);
	}
	else
		echo "{\"a\": \"a\"}";

?>