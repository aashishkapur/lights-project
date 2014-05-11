nerby();
	function nerby()  {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			  var data =JSON.parse(xmlhttp.responseText);
			  document.getElementById("YOLO1").innerHTML="Based on analysis, we have conclused that " + data[0][0] + " is the best, most notable due to its food score of " + data[0][1]+" and a water score of " + data[0][2] + ". These factors were among many others but these were most vital to our decision" ;
			  document.getElementById("YOLO2").innerHTML="Based on analysis, we have conclused that " + data[1][0] + " is the best, most notable due to its food score of " + data[1][1]+" and a water score of " + data[1][2] + ". These factors were among many others but these were most vital to our decision" ;
			  document.getElementById("YOLO3").innerHTML="Based on analysis, we have conclused that " + data[2][0] + " is the best, most notable due to its food score of " + data[2][1]+" and a water score of " + data[2][2] + ". These factors were among many others but these were most vital to our decision" ;
		}
	}
	var string = "nearby.php";
	xmlhttp.open("GET",string, true);
	xmlhttp.send();
}