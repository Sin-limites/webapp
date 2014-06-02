<?php

date_default_timezone_set('Europe/Amsterdam');

session_start();

?>

<!DOCTYPE html>

<html>

<head>
  
  <title>SIN LIMITES BAM JONGE</title>
  
  <meta charset="utf-8">
  <link rel="stylesheet" href="/res/css/main.css">
<<<<<<< HEAD
<<<<<<< HEAD
=======
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
  <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
  <script src="http://leaflet.github.io/Leaflet.heat/dist/leaflet-heat.js"></script>
  
  <?php 
  // See if map.php is the current file, if true include the gmap file
  // $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
  // if(in_array('map.php', $scriptName)) {
    // include_once('../app/model/gmap.php');
  // }
  ?>
>>>>>>> origin/tim
=======
>>>>>>> d67f2bfc2ccbe3e6454f275266fa438ae455b034
  
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
  
</head>
<body>

<?php

include "../autoloader/autoloader.php";
include "../config/exeption_handler.php";

set_exception_handler('exception_handler');

$pdo = dbConnect::getInstance();

$url = $_SERVER['REQUEST_URI'];

$array_tmp_uri = preg_split('[\\/]', $url, -1, PREG_SPLIT_NO_EMPTY);

$array_uri = array(
    'controller' => 'user',
    'method' => 'login',
    'var' => array()
);

foreach ($array_tmp_uri as $key => $val)
  {
  switch($key) {
    case 0:
      $array_uri['controller'] = $val;
      break;
    case 1:
      $array_uri['method'] = $val;
    break;
    default:
      $array_uri['var'][] = $val;
  }
}

if(isset($_SESSION['log'])){
  // Show the header for user. -> Only show it when the user is logged in.. otherwize the login view will be very weird.
  include_once "../application/view/user/_header.php";
}

$app = new mvc($array_uri);
$app->loadController($array_uri['controller']);



?>

  <!-- footer -->
  <footer>
    <div class="footer">
      Copyright &copy; Sin Limites, 2014
    </div><!-- /footer -->
  </footer>
</div><!-- /container -->

  </body>
  <!-- key=AIzaSyDGwUpTVd6XKuYSpd2dJeEBfC4KDCYxNIs& -->

</html>
