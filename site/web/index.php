<?php

date_default_timezone_set('Europe/Amsterdam');

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




// exit;


include_once('../app/includes.php'); 

include_once('../app/templates/header.php');

?>


<!-- container -->
<div class="container">

	<!-- header -->
	<div class="header">
		<!-- logo -->
		<div class="logo">
			<a href=""><img src="res/images/logo.png"></a>
		</div><!-- /logo -->

		<!-- nav -->
		<div class="nav"><span>
			<ul>
				<li class="current"><a href="#">home</a></li>
				<li><a href="data.php">data</a></li>
				<li><a href="map.php">map</a></li>
			</ul></span>
		</div><!-- /nav -->
	</div><!-- /header -->

	<!-- intro -->
	<div class="intro">
		<div id="banner">
			<img src="res/images/banner_01.png" />
		</div>
	</div><!-- /intro -->

	<!-- content -->
	<div class="holder_content">
		<section class="group1_about">
			<h3>Over ons..</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
			Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
			<a href="#">Meer..</a>
		</section>

		<section class="group2_service">
			<h3>Service</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
			Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
			<a href="#">Meer..</a>
		</section>

		<section class="group3_contact">
			<h3>Contact</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
			Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
			<a href="#">Meer..</a>
		</section>
	</div>

	<!-- footer -->
	<footer>
		<div class="footer">
			Copyright &copy; Sin Limites, 2014
		</div><!-- /footer -->
	</footer>
</div><!-- /container -->

<?php include_once('../app/templates/footer.php');

