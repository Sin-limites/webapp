<?php

  $goods = new goods();
  
?>

  <!-- content -->
  <div class="holder_content">
    <section class="group1_sidebar">
      <h3><a href="#" onclick="MoveToBookmark(1);return false;">Maasvlakte 1</a></h3>
      <h3><a href="#" onclick="MoveToBookmark(2);return false;">Maasvlakte 2</a></h3>
      <h3><a href="#" onclick="MoveToBookmark(3);return false;">Dintelhaven</a></h3>
      <h3><a href="#" onclick="MoveToBookmark(4);return false;">Seinehaven</a></h3>
    </section>

    <section class="group2_map">
      <div id="map"></div>
    </section>
  </div>

<script>

var data = <?php echo $goods->getContainerLocationData(); ?>;
var heatmapData = new Array();

var map = L.map('map').setView([51.95823052624468, 4.051809310913086], 13);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
    maxZoom: 18,
    minZoom: 12
}).addTo(map);

mapHmData(data);

var heat = L.heatLayer(heatmapData,{
    radius: 20,
    blur: 15, 
    maxZoom: 17,
}).addTo(map);


map.on('click', function(e) {
    console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
});

function mapHmData (input){
    for (var i = 0; i < input.length; i++) {
      var obj = input[i]['locationID'];
      heatmapData.push(new L.LatLng(obj.latitude,obj.longitude,5));
    }
  }

  function getRandomInRange(from, to, fixed) {
    return (Math.random() * (to - from) + from).toFixed(fixed) * 1;
  }

function MoveToBookmark(loc) {
  switch (loc) {
    case 1: 
      //maasvlakte 1
      map.panTo(new L.LatLng(51.95823052624468, 4.051809310913086));
      break;
    case 2:
      //maasvlakte 2
      map.panTo(new L.LatLng(51.94944960416181, 3.992757797241211));
      break;
    case 3:
      //dintelhaven
      map.panTo(new L.LatLng(51.95093084411432, 4.115195274353027));
      break;
    case 4:
      //Seinehaven
      map.panTo(new L.LatLng(51.879352249020855, 4.245293140411377));
      break;   
  }
}

</script>