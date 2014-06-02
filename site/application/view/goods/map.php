<?php

  $goods = new goods();
  
?>
<script>
  var data = <?php echo $goods->getContainerLocationData(); ?>;
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
      console.log(obj);
      heatmapData.push({location: new google.maps.LatLng(obj.latitude,obj.longitude), weight: Math.random() * 100});
    }
  
    var pointArray = new google.maps.MVCArray(heatmapData);
    
    var pointArray = new google.maps.visualization.HeatmapLayer({
      data: heatmapData,
      map: map
    });
    
  }

  function moveViewport(lat, lng){
    var center = new google.maps.LatLng(lat, lng);
    map.panTo(center);
    // map.setZoom(15);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
  
  
  </script>

  <!-- intro -->
  <div class="intro">
    <div id="banner">
      <img src="/res/images/banner_01.png" />
    </div>
  </div><!-- /intro -->

  <!-- content -->
  <div class="holder_content">
    <section class="group1_sidebar">
      <h3>Filters..?</h3>
    </section>

    <section class="group2_map">
      <div id="map_canvas"></div>
    </section>
  </div>

