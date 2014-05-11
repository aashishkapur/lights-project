
function OMGOMGOMG()  {
	alert("HEY");
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			  document.getElementById("Error").innerHTML=xmlhttp.responseText;
		}
	}
	var name = document.getElementById('select-native-1').value;
	var comfort = document.getElementById('comfort').value;
	var food = document.getElementById('food').value;
	var power = document.getElementById('power').value;
	var medical = document.getElementById('medical').value;
	var space = document.getElementById('space').value;
	var latitude = document.getElementById('latitude').value;
	var longitude = document.getElementById('longitude').value;
	var stability = document.getElementById('stability').value;
	var water = document.getElementById('water').value;
	var clothing = document.getElementById('clothing').value;
	var sanitation = document.getElementById('sanitation').value;
	var completion = document.getElementById('completion').value;
	var string = "review.php?name=" + name + "&comfort=" + comfort + "&food=" + food + "&power=" + power + "&medical=" + medical + "&space=" + space + "&latitude=" + latitude + "&longitude=" + longitude + "&stability=" + stability + "&water=" + water + "&clothing=" + clothing + "&sanitation=" + sanitation +"&completion=" + completion;
	xmlhttp.open("GET",string, true); // ADD NAME AND ALL CREDIENTIALS
	xmlhttp.send();
}


