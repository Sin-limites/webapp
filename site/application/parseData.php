<?php

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

?>
