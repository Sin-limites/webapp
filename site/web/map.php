
<?php 

include_once('../app/includes.php'); 

include_once('../app/templates/header.php');

?>



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
			<a onclick="moveViewport(51.8946824,4.4203214)" href="javascript:void(0);">klik</a>
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


<?php include_once('../app/templates/footer.php');

