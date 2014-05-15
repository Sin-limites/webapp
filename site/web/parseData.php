<?php
	
	$con=mysqli_connect("localhost","sinlimites","tech4life","sinlimites");
	
	$sql = "SELECT Equipment_number,Latitude,Longitude FROM p78_Goods";

	$result = mysqli_query($con,"SELECT Equipment_number,Latitude,Longitude FROM p78_Goods");
	if (!$result) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}

	$locationData = array();
	while($row = mysqli_fetch_array($result)) {
		array_push($locationData, $row);
	}

	$locationData_js = json_encode($locationData)

	// for ($i = 0; $i < count($locationData); $i++)
	// {
	// 	for ($k = 0; $k < 3; $k++)
	// 	{
	// 		echo $locationData[$i][$k]. " ";
	// 	}
	// 	echo "<br>";
	// }

?>
