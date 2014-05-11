 <?php ob_start(); ?>
<?php include('config.php') ?>
 <?php 
	session_start();
	$afterurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$email = $_SESSION["email"] ; 
		$query = "SELECT * FROM users WHERE Email ='$email'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$id = $row[0];
	if (isset($_GET['ID']) ) 
		$postid = $_GET['ID'];
	$subquery = "SELECT * FROM users WHERE Email='$postid'";
	$subres = mysql_query($subquery);
	$wtf = mysql_fetch_array($subres);
	echo($wtf[3] . " - " . $wtf[1]);
	if ($wtf[$id] == 2) 
		echo("<br>Friend");
	else
		echo("<br>Not Friend");
	echo("<form name='forma' action='request.php?ID=" . $postid . "' method='post'><input type='submit' value='Friend Request'> </input></form>");
 ?>
