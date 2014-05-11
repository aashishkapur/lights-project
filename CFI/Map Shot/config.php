<?php
// // Connection's Parameters
// $db_host="localhost";
// $db_name="cfihack";
// $username="root";
// $password="earth2412";

// $db_con=mysql_connect($db_host,$username,$password);
// $connection_string=mysql_select_db($db_name);
// // Connection
// $dbhandle = mysql_connect($db_host,$username,$password) or die("Could not connect to database");
// $selected = mysql_select_db($db_name);
$db_conn = mysql_connect(':/cloudsql/lights-project:abcdef',
  'root', // username
  ''      // password THIS SHOULD BE LEFT BLANK
  );
if(!$db_conn)
{
	die("<br/>" . mysql_error());
}

// echo 'abcdef';
 $selected = mysql_select_db('cfi-hack-v1');
?>