<script>
  var data = <?php echo $locationData_js; ?>;
  var heatmapData = new Array();
  var map;

  function initialize() {
    var map_canvas = document.getElementById('map_canvas');
    var map_options = {
      center: new google.maps.LatLng(51.955454, 4.037449),
      zoom: 11,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: false
    }
    map = new google.maps.Map(map_canvas, map_options)
  
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(51.955454, 4.037449),
      map: map,
      title: 'Hello World!'
    });
  
    for (var i = 0; i < data.length; i++) {
      var obj = data[i];
      heatmapData.push({location: new google.maps.LatLng(obj.Latitude,obj.Longitude), weight: Math.random() * 100});
    }
  
    var pointArray = new google.maps.MVCArray(heatmapData);
    
    var pointArray = new google.maps.visualization.HeatmapLayer({
      data: heatmapData,
      map: map
    });
  
    //heatmap.setMap(map);
  
  }

  function moveViewport(lat, lng){
    var center = new google.maps.LatLng(lat, lng);
    map.panTo(center);
    // map.setZoom(15);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
  </script>

