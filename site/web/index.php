<?php

date_default_timezone_set('Europe/Amsterdam');

session_start();

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


$app = new mvc($array_uri);
$app->loadController($array_uri['controller']);

