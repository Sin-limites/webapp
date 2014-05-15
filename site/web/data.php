<?php

include 'config.php';

?>

<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="res/css/main.css">
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>

	<?php include 'parseData.php'; ?>
	<?php //include 'gmaps.php'; ?>

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
				<li class="current"><a href="#">data</a></li>
				<li><a href="map.php">map</a></li>
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
		<section class="group1_data">
			<h3>Informatie containers</h3>
			<?php

//				$con = mysqli_connect("localhost","sinlimites","tech4life","sinlimites");
				$result = mysqli_query($con,"SELECT * FROM p78_Goods");


				echo "<table border='1' id='goods_data'>
				<tr>
				<th>Scheepsnaam</th>
				<th>Handling</th>
				<th>Terminal</th>
				<th>Consignment_nr</th>
				<th>Package kind</th>
				<th>Shipping</th>
				<th>Group</th>
				<th>EquipNr</th>
				<th>Stowage</th>
				</tr>";

				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>" . $row['Scheepsnaam'] . "</td>";
					echo "<td>" . $row['Handling'] . "</td>";
					echo "<td>" . $row['Terminal'] . "</td>";
					echo "<td>" . $row['Consignmentnr'] . "</td>";
					echo "<td>" . $row['Kind_of_package'] . "</td>";
					echo "<td>" . $row['Shipping_Name'] . "</td>";
					echo "<td>" . $row['Packaging_Group'] . "</td>";
					echo "<td>" . $row['Equipment_number'] . "</td>";
					echo "<td>" . $row['Stowage_position'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
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
