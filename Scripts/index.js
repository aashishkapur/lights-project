var myvar = getURLParameter("correct");
	if (myvar == 0) 
		document.getElementById('Error').innerHTML="Incorrect username or password";
	function getURLParameter(name) {
		return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
	}
