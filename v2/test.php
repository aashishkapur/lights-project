<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<style type="text/css">
			html { height: 100% }
			body { height: 100%; margin: 0; padding: 0 }
			#map-canvas { height: 100% }
		</style>
		<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfkyb50aOPYENbA1yUFLmda5th5UCR7cw">
		</script>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			function initialize() {
				var mapOptions = {
					center: new google.maps.LatLng(28.6133, 77.1250),
					zoom: 3
				};
				var map = new google.maps.Map(document.getElementById("map-canvas"),
						mapOptions);

				var m =	new google.maps.Marker({
								position: new google.maps.LatLng
								(0, 0),
								map: map,
								title:"Marker: " + 3 + "!"
							});


				alert("start loop");
				//console.log("start loop");
				var markers = [];
				var id = 0;
				for (id = 1; id == 1; id++)
				{
					console.log("beginning id:" + id);
					var request = $.ajax({
						type: "POST",
						url: "getData.php",			            
						data: {'id': id},
						cache: false,
						dataType: 'json',
						success: function (data) {

							console.log(data);
							//alert(data);
							var tempMarker = new google.maps.Marker({
								position: new google.maps.LatLng
								(data.lat, data.lng),
								map: map,
								title:"Marker: " + id + "!"
							});
						},
						//look here, probably problems dealing with getting json data from getData.php
						//http://stackoverflow.com/questions/8951810/how-to-parse-json-data-with-jquery-javascript
						//https://developers.google.com/maps/documentation/javascript/markers
						error: function(xhr, textStatus, errorThrown){
							alert("error, i: " + id + "   " + xhr.responseText);
						}
					});
				};
				alert("end loop");
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<body>
		<div id="map-canvas"/>
	</body>
</html>