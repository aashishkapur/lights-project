<?php ob_start(); ?>
<?php include('config.php') ?>
<?php
	// Just checks to see if email and passwrd is not spam
	session_start();
	$email = stripslashes($_POST['email']);
	$pass = stripslashes($_POST['pass']);
	if (isValid($email) && isValid($pass)) 
		checkDB($email, $pass);
		
	function isValid($str) { // Checks to see if it only contains a-z characters, numbers, @ sign, period and idk wat else
		return !preg_match('/[^A-Za-z0-9.@\\-$]/', $str);
	}	
	
	function checkDB ($email, $pass) { // Checks to see if the email and password is legit
		$pass = md5($pass);
		$query = "SELECT * FROM users WHERE Email='$email' and Password='$pass'";
		$result = mysql_query($query);
		$count = mysql_num_rows($result);
		$row  = mysql_fetch_array($result);
		if(is_array($row)) {
			setData($email, $row); // Sets up the session if the account is legit
		} 
		else {
			header("location:../index.html?correct=0"); // Location header to bad login page
		}
	}
	
	function setData ($email, $row) { //Defines a bunch of session variables from the database
		$_SESSION["email"] = $email;
		$_SESSION["mysubs"] = $row[9];
		$_SESSION["whosubbbed"] = $row[8];
		$_SESSION["name"] = $row[1];
		$seconds = 1800 + time();
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
		header("location:../main.htm#welcome");
	}
	//header("location:../index.html?correct=0");
	json_encode("Sorry, wrong username or password");
?>
<?  ob_flush(); ?>
