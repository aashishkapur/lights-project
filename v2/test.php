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

				var markers = [];
				for (var id = 0; id >= 15; id++)
				{
					var request = $.ajax({
						type: "POST",
						url: "getData.php",			            
						data: "id=" + id,
						datatype: 'json',
						success: function (data) {
							console.log(id);
							alert("data");
							markers[id] = new google.maps.Marker({
								position: new google.maps.LatLng
								(data.lat, data.lng),
								map: map,
								title:"Marker: " + id + "!"
							});
						},
						error: function(){
							alert("error, i: " + id);
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