<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="res/css/main.css">
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>

	<?php include 'parsedata.php'; ?>
	<?php include 'gmaps.php'; ?>

</head>

<body>
<!-- container -->
<div class="container">

	<!-- header -->
	<div class="header">
		<!-- logo -->
		<div class="logo">
			<a href="#"><img src="res/images/logo.png"></a>
		</div><!-- /logo -->

		<!-- nav -->
		<div class="nav">
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="data.php">data</a></li>
				<li class="current"><a href="#">map</a></li>
			</ul>
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
		<section class="group1_sidebar">
			<h3>Filters..?</h3>
		</section>

		<section class="group2_map">
			<div id="map_canvas"></div>
		</section>
	</div>

	<!-- footer -->
	<footer>
		<div class="footer">
			Copyright &copy; Sin Limites, 2014
		</div><!-- /footer -->
	</footer>
</div><!-- /container -->
</body>
<!-- key=AIzaSyDGwUpTVd6XKuYSpd2dJeEBfC4KDCYxNIs& -->