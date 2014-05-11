<?php ob_start(); ?>
<?php include('config.php') ?>
<?php
	mysql_query("ALTER TABLE `users` DROP `ID`");
	mysql_query("ALTER TABLE `users` AUTO_INCREMENT = 1");
	mysql_query("ALTER TABLE `users` ADD `ID` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
	$name = $_GET['Name'];
	$email = $_GET['Email'];
	$pass = $_GET['Pass'];
	$pass = md5($pass);
	$date = $_GET['Address'];
	$query = mysql_query("SELECT * FROM users WHERE Email='$email'");
	$str = "NICE JOB";
	if(mysql_num_rows($query) > 0 ) { 
		$str = "Email Address Already Exists";
	}
	else{
		mysql_query("INSERT INTO users (Name, Email, Password, Address) VALUES ('$name', '$email', '$pass', '$date')");
		$email = $_GET['Email'];
		$string = replace_dashes($name); 
		echo($string);
		$m = mysql_query("ALTER TABLE users ADD ". $string. " text NOT NULL");
		$l = mysql_query("ALTER TABLE users ALTER $string SET DEFAULT '0'");
		$str = "Account Successfully Created";
	}
	echo($str);
	json_encode($str);
	
	function replace_dashes($string) {
    $string = str_replace(" ", "_", $string);
    return $string;
}
?>
