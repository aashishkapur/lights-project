
showHint();
	function showHint()  {
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			  var data =JSON.parse(xmlhttp.responseText);
			bob(data);
		}
	}
	var string = "search.php";
	xmlhttp.open("GET",string, true);
	xmlhttp.send();
}



function bob ( data) {
 var options = '';
  for(var i = 0; i < data.length; i++)
    options += '<option value="'+data[i]+'" />';
	 alert(options);
  document.getElementById('search').innerHTML = options;
 
}
 
 