<?php
// Connection's Parameters
// $db_host="173.194.242.144";
// $db_name="cfi-hack-v1";
// $username="root";
// $password="a";
echo 'hello<br/>';
// $db_con = mysql_connect($db_host,$username,$password);
// $connection_string = mysql_select_db($db_name);
// // Connection
// $dbhandle = mysql_connect($db_host,$username,$password) or die("Could not connect to database");
// $selected = mysql_select_db($db_name);

$db_conn = mysql_connect(':/cloudsql/lights-project:abcdef',
  'root', // username
  'a'      // password
  );
if(!$db_conn)
{
	die("fywbdhjkjngihdjknvclm;sdfghirujknfgjhouinj" . mysql_error());
}

echo 'abcdef';
$selected = mysql_select_db('cfi-hack-v1');

if(!$db_conn)
{
	die("fywbdhjkjngihdjknvclm;sdfghirujknfgjhouinj" . mysql_error());
}

echo "aaaaaaaaaaaaaaa";

?>	