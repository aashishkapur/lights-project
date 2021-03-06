<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
#map_wrapper {
    height: 400px;
}

#map_canvas {
    width: 100%;
    height: 100%;
}	</style>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

	var adat = [];
	function getData()
	{
		var arr = new Array();
		var data;
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() 
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				 adat = xmlhttp.responseText;
				 console.log("RAW: " + adat);
				data=JSON.parse(xmlhttp.responseText);
				console.log("data: " + data);
				//console.log("345678909876543456 " + data[0][0]);
				// for (var x = 0; x < data[0].length; x++) 
				// {
				// 	var myLatlng = new google.maps.LatLng(parseFloat(data[0][x]),parseFloat(data[0][x]));
				// 	arr.push(myLatlng);
				// 	console.log(arr[x]);
				// }
				// initialize(arr);
			}
		}
		xmlhttp.open("GET","/maps/locations.php" ,true);
		xmlhttp.send();
		//return adat;
	}

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
			zoom: 4,
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    //map.setTilt(45);
        
    // Multiple Markers
    var markers {


    };
    var temp = new Array();
    getData();
    alert(adat);

    for(var i = 0; i < adat.length; i++)
    	markers.push(adats[i]);

    // Info Window Content
    var infoWindowContent = [
        ['info 1'],
        ['info 2']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(parseFloat(markers[i][0]), parseFloat(markers[i][1]));
       // bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: 'Marker' + i + "."
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        //map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    // var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
    //     this.setZoom(14);
    //     google.maps.event.removeListener(boundsListener);
    // });
    
}
	// //getData();
	// var arr = new Array();
	// function getData()
	// {
	// 	//gone = true;
	// 	var xmlhttp=new XMLHttpRequest();
	// 	xmlhttp.onreadystatechange=function() 
	// 	{
	// 		if (xmlhttp.readyState==4 && xmlhttp.status==200)
	// 		{
	// 			// var a = xmlhttp.responseText;
	// 			// console.log("RAW: " + a);
	// 			var data=JSON.parse(xmlhttp.responseText);
	// 			console.log("data2367876543234567 " + data);
	// 			console.log("345678909876543456 " + data[0][0]);
	// 			for (var x = 0; x < data[0].length; x++) 
	// 			{
	// 				var myLatlng = new google.maps.LatLng(parseFloat(data[0][x]),parseFloat(data[0][x]));
	// 				arr.push(myLatlng);
	// 				console.log(arr[x]);
	// 			}
	// 			initialize(arr);
	// 		}
	// 	}
	// 	xmlhttp.open("GET","locations.php" ,true);
	// 	xmlhttp.send();
	// }
	// var contentString = new Array();
	// contentString.push('<p>FIRST INFO WINDOW</p>');
	// var infowindow = null;
	// contentString.push('<p>7tfdgsuyhbckxj</p>');


	// var markers = new Array();
	// var asdf = false;
	// var num = 1;
	// //var marker;

	// function initialize(arr)
	// {
	// 	//alert("init");
	// 	var mapOptions = 
	// 	{
	// 		zoom: 4,
	// 		center: arr[1]
	// 	};

	// 	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	// 	// contentString[0] = '<p>FIRST INFO WINDOW</p>';
	// 	// contentString[1] = '<p>7tfdgsuyhbckxj</p>';
	// 	infowindow = new google.maps.InfoWindow({});
	// 	//alert("loop  " +arr.length);
	// 	for (var x = 0; x < arr.length; x++)
	// 	{
	// 		alert("X: " + x);
	// 		if (arr[x] != null)
	// 		{
	// 			var marker = new google.maps.Marker(
	// 			{
	// 				position: arr[x],
	// 				map: map,
	// 				title: 'Marker: ' + x + '!'
	// 			});
	// 			// console.log(markers.push(marker) + "             "
	// 			// 	 + "added " + x + "   m:" + marker + "         " + markers);
			
	// 			//   google.maps.event.addListener(marker, 'click', function()
	// 			//   {
	// 			// 	infowindow.setContent(marker.title + "   " + num++);
	// 			// 	infowindow.open(map, marker);
	// 		// 	 });

	// 			   (function(marker, x) {
	// 					// add click event
	// 					google.maps.event.addListener(marker, 'click', function() {
	// 						infowindow = new google.maps.InfoWindow({
	// 							content: contentString[x]
	// 						});
	// 						infowindow.open(map, marker);
	// 					});
	// 				})(marker, x);

	// 		}
	// 	}
	// }


	// google.maps.event.addDomListener(window, 'load', getData);
	</script>
</head>
  <body>
<div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>
</div>  </body>
</html>