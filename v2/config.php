<?php

$db_conn = mysql_connect(':/cloudsql/lights-project:abcdef',
  'root', // username
  'root'      // password
  );
if(!$db_conn)
{
	die("<br/>" . mysql_error());
}

// echo 'abcdef';
 $selected = mysql_select_db('cfi-v2');

?>