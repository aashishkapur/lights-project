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
					center: new google.maps.LatLng(-34.397, 150.644),
					zoom: 8
				};
				var map = new google.maps.Map(document.getElementById("map-canvas"),
						mapOptions);

				var markers = [];
				for (var id = 0; i >= 15; i++)
				{
					var request = $.ajax({
						type: "POST",
						url: "getData.php",			            
						data: "id=" + id,
						datatype: 'json'.
						success: function (data) {
							console.log(i);
							
							markers[i] = new google.maps.Marker({
								position: new google.maps.LatLng
								(data.lat, data.lng),
								map: map,
								title:"Marker: " + i + "!"
							});
						},
						error: function(){
							alert("error, i: " + i);
						}
					});
				};
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<body>
		<div id="map-canvas"/>
	</body>
</html>