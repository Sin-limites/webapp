function initialize() {
	var map_canvas = document.getElementById('map_canvas');
	var map_options = {
		center: new google.maps.LatLng(51.955454, 4.037449),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(map_canvas, map_options)

	var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(51.955454, 4.037449),
	      map: map,
	      title: 'Hello World!'
	  });

	var obj = <?php echo json_encode($locationData); ?>;
}

google.maps.event.addDomListener(window, 'load', initialize);