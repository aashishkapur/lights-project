function checkCreds () {
	var pass = document.getElementById('Password').value;
	var cpass = document.getElementById('Confirm Password').value
	if(pass != cpass)
		document.getElementById('Error').innerHTML="Passwords Do Not Match";
	else
		hobobob();
}
function hobobob()  {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			  document.getElementById("Error").innerHTML=xmlhttp.responseText;
		}
	}
	var name = document.getElementById('Name').value;
	var email = document.getElementById('Email').value;
	var pass = document.getElementById('Password').value;
	var date = document.getElementById('Address').value;
	var string = "PHP/newaccount.php?Name=" + name + "&Email=" + email + "&Pass=" + pass + "&Address=" + date;
	xmlhttp.open("GET",string, true); // ADD NAME AND ALL CREDIENTIALS
	xmlhttp.send();
}