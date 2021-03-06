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
				var infoWindows = [];
				var id = 0;
				for (id = 0; id <= 2; id++)
				{
					var request = $.ajax({
						type: "GET",
						url: "getData.php",
						data: "id=" + id,
						dataType: 'json',
						success: function (data) {

							console.log(data);

							markers.push(new google.maps.Marker({
								position: new google.maps.LatLng
								(parseInt(data.lat), parseInt(data.lng)),
								map: map,
								title: data.name
							}));

							var contentString = 
							'<div id="content">'+
								'<h1 id="firstHeading" class="firstHeading">' + 
										data.name + '</h1>'+
								'<div id="bodyContent">'+
									'<p>' + 
										'<b>comfort:</b>' + data.comfort + '<br/>' + 
										'<b>food:</b>' + data.food + '<br/>' + 
										'<b>power:</b>' + data.power + '<br/>' + 
										'<b>space:</b>' + data.space + '<br/>' + 
										'<b>stability:</b>' + data.stability +'<br/>' + 
										'<b>water:</b>' + data.water + '<br/>' + 
										'<b>clothing:</b>' + data.clothing + '<br/>' + 
										'<b>sanitation:</b>'+data.sanitation +'<br/>' + 
										'<b>completion:</b>'+data.completion +'<br/>' + 
									'</p>' + 
								'</div>' + 
							'</div>';

							infoWindows.push(new google.maps.InfoWindow({
								content: contentString
							}));

							//console.log("infowindows[" + id+ "]: " + infoWindows[id]);
							
							// alert(id);

							// google.maps.event.addListener(
							// 	markers[id], 'click', 
							// 	function(id) {
							// 		return function() {
							// 			infoWindows[id].open(map,markers[id]);
							// 		}
							// }(id));

							//from google:
							// google.maps.event.addListener(markers[id], 'click', function(){
							// 	infoWindows[id].open(map,markers[id]);
							// });

							//stack overflow
							// google.maps.event.addListener(
							// 	markers[key], 'click', function(innerKey) {
							//   return function() {
							//       infowindows[innerKey].open(map, markers[innerKey]);
							//   }
							// }(key));

							//other stack overflow
							// google.maps.event.addListener(
							// 	markersArray[x], 'click', 
							// 	makeMapListener(
							// 		inforwindowArray[x], map, markersArray[x])
							// );
						// google.maps.event.addListener(markers[id], 'click', 	makeMapListener(infoWindows[id], map, markers[id]));

						},
						error: function(xhr, textStatus, errorThrown){
							console.log("statusText: " + xhr.statusText);
							console.log("textStatus: " + textStatus);
							console.log("errorThrown: " + errorThrown);
						}
					});// end ajax
				}//end loop

			// use google.maps.event.addListener(markersArray[x], 'click', 	makeMapListener(inforwindowArray[x], map, markersArray[x]));
				// function makeMapListener(window, map, markers)
				// {
	 		// 		return function(){
	 		// 			window.open(map, markers);
	 		// 		};
				// }

			} // end initialize
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<body>
		<div id="map-canvas"/>
	</body>
</html>