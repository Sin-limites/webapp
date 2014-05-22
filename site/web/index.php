<?php

date_default_timezone_set('Europe/Amsterdam');

session_start();

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/res/css/main.css">
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
  
  <?php 
  // See if map.php is the current file, if true include the gmap file
  // $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
  // if(in_array('map.php', $scriptName)) {
    // include_once('../app/model/gmap.php');
  // }
  ?>
  
  
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

// Show the header for user.
include_once "../application/view/user/_header.php";

$app = new mvc($array_uri);
$app->loadController($array_uri['controller']);

?>

  </body>
  <!-- key=AIzaSyDGwUpTVd6XKuYSpd2dJeEBfC4KDCYxNIs& -->

</html>
