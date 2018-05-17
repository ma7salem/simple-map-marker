
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
	width:450px;
        height: 450px
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
	<br />
	<input type="text" id="lat" />
	<br />
	<input type="text" id="lng" />
    <script>

      function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
	  draggable: true,
          title: 'Hello World!'
        });
	marker.addListener('position_changed', function() {
   			var lat = marker.getPosition().lat();
   			var lng = marker.getPosition().lng();
   			document.getElementById("lat").value = lat;
   			document.getElementById("lng").value = lng;
  });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy68ZIfWzEX9z19gJ5e3wD298EeDoBiUE&callback=initMap">
    </script>
  </body>
</html>