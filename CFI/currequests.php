  <?php ob_start(); ?>
<?php include('config.php') ?>
 <?php 
	session_start();
	$email = $_SESSION["email"] ; 
	$query = "SELECT * FROM users WHERE Email ='$email'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result); 
	$rowlen = sizeof($row);

	for ($x = 8; $x < $rowlen; $x++) {
		if ( array_key_exists($x, $row)) {
		if ($row[$x] == 5) {
			$id = $x - 7;
			$rez = mysql_query("SELECT * FROM users WHERE ID ='$id'");
			$arr = mysql_fetch_array($rez);
			echo("<form name='forma' action='currequests.php' method='post'>");
			echo($arr[3] . "-" . $arr[1]);
			showForm($id);
		}
		}
	}
	if (isset($_POST['test'])) {
		$rez = mysql_query("SELECT * FROM users WHERE ID ='".$_POST['test']."'");
		$rw = mysql_fetch_array($rez);
		$name = $rw[3];
		$name = replace_dashes($name);
		mysql_query("UPDATE users SET $name= 1 WHERE Email = '$email'");
		mysql_query("UPDATE users SET " .  replace_dashes($row[3]) . "= 1 WHERE ID = '".$_POST['test']."'");
	}
	function showForm ($id) {
		echo("
			<button type='submit' id='test' name='test' value='$id'> Add Friend</button>
		</form>");
	}
	function replace_dashes($string) {
    $string = str_replace(" ", "_", $string);
    return $string;
}

 ?>
