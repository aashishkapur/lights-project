<?php

$conn = mysql_connect(':/cloudsql/lights-project:abcdef',
  'root', // username
  ''  // password
  //******
  //note: app engine does not use passwords when connecting
  //******
  );
if(!$conn)
{
	die("<br/>" . mysql_error());
}

// echo 'abcdef';
mysql_select_db('cfi-v2');

// $conn = mysql_connect(':/cloudsql/<your-project-id>:<your-instance-name>',
//   'root', // username
//   ''      // password
//   );
// mysql_select_db('<database-name'>);


?>