nohint();
	function nohint()  {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			  var data =JSON.parse(xmlhttp.responseText);
			  if (data == true)
				window.location = ".../PHP/login_success.php";
		}
	}
	var string = "../PHP/isloggedin.php";
	xmlhttp.open("GET",string, true);
	xmlhttp.send();
}