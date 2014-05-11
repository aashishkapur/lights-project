 <?php ob_start(); ?>
<?php include('config.php') ?>
 <?php 
	session_start();
	$email = $_SESSION["email"] ; 
		$query = "SELECT * FROM users WHERE Email ='$email'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$id = $row[0];
	if (isset($_GET['ID']) ) 
		$postid = $_GET['ID'];
	$name = $row[3];
	$name = replace_dashes($name);
	
	mysql_query("UPDATE users SET $name= 5 WHERE Email = '$postid'");
function replace_dashes($string) {
    $string = str_replace(" ", "_", $string);
    return $string;
}
	echo("Friend Request sent");

 ?>
