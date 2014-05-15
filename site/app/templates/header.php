<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="res/css/main.css">
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
  
  <?php 
  // See if map.php is the current file, if true include the gmap file
  $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
  if(in_array('map.php', $scriptName)) {
    include_once('../app/model/gmap.php');
  }
  ?>
  
  
</head>

<body>