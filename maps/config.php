<?php
// Connection's Parameters
$db_host="173.194.242.144";
$db_name="cfi-hack-v1";
$username="root";
$password="a";

$db_con = mysql_connect($db_host,$username,$password);
$connection_string = mysql_select_db($db_name);
// Connection
$dbhandle = mysql_connect($db_host,$username,$password) or die("Could not connect to database");
$selected = mysql_select_db($db_name);

// $conn = mysql_connect(':/cloudsql/<your-project-id>:<your-instance-name>',
//   'root', // username
//   ''      // password
//   );
// mysql_select_db('<database-name'>);

?>
