<div class="holder_content">
<div class="group_stowdetail">
<p>Stowage Detail</p>
<p>
<?php
	
	ob_start();
	var_dump($vars);
	$stowageArray = ob_get_clean();
	$pattern = '/\"([^\"]*?)\"/';

	preg_match($pattern, $stowageArray, $stowageNr);

	$x = 5;
	$y = 6;

	if(strlen($stowageNr[1]) == 5){
		$bay = substr($stowageNr[1], 0, 1);
		$row = substr($stowageNr[1], 1, 2);
		$tier = substr($stowageNr[1], 3, 2);
	} else if (strlen($stowageNr[1]) == 6) {
		$bay = substr($stowageNr[1], 0, 2);
		$row = substr($stowageNr[1], 2, 2);
		$tier = substr($stowageNr[1], 4, 2);
	}

	//change stow row numbers to table td numbers
	$cellX = $row;
	if($cellX == 16) $cellX = 1;
	else if($cellX == 14) $cellX = 2;
	else if($cellX == 12) $cellX = 3;
	else if($cellX == 10) $cellX = 4;
	else if($cellX == 08) $cellX = 5;
	else if($cellX == 06) $cellX = 6;
	else if($cellX == 04) $cellX = 7;
	else if($cellX == 02) $cellX = 8;
	else if($cellX == 01) $cellX = 9;
	else if($cellX == 03) $cellX = 10;
	else if($cellX == 05) $cellX = 11;
	else if($cellX == 07) $cellX = 13;
	else if($cellX == 09) $cellX = 14;
	else if($cellX == 11) $cellX = 16;

	//chage stow tier numbers to table tr numbers
	$cellY = $tier;
	if($cellY == 90) $cellY = 1;
	else if($cellY == 88) $cellY = 2;
	else if($cellY == 86) $cellY = 3;
	else if($cellY == 84) $cellY = 4;
	else if($cellY == 82) $cellY = 5;
	else if($cellY == 12) $cellY = 6;
	else if($cellY == 10) $cellY = 7;
	else if($cellY == 08) $cellY = 8;
	else if($cellY == 06) $cellY = 9;
	else if($cellY == 04) $cellY = 10;
	else if($cellY == 82) $cellY = 11;
?>

	Stowage number: <?php echo $stowageNr[1]; ?><br>
	Bay: <?php echo $bay ?><br>
	Row: <?php echo $row ?><br>
	Tier: <?php echo $tier ?><br>

	Locatie container:<br>
	<?php
		$rows = 11; // define number of rows
		$cols = 16;// define number of columns

		echo "<table border='0'>";

		for($tr=1;$tr<=$rows;$tr++){

				echo "<tr>";

			for($td=1;$td<=$cols;$td++){
				if($tr==$cellY && $td==$cellX) {
					echo "<td style=background-color:red></td>";					
				}
				else if($tr >= 1 && $tr <= 5){
					echo "<td></td>";
				} else if($tr > 5 && $tr < 8 && $td > 1 && $td < 16) {
					echo "<td></td>";
				} else if($tr > 7 && $tr < 10 && $td > 2 && $td < 15) {
					echo "<td></td>";
				} else if($tr == 10 && $td > 3 && $td < 14) {
					echo "<td></td>";
				} else if($tr == 11 && $td > 4 && $td < 13) {
					echo "<td></td>";
				} else {
					echo "<td style=background-color:white></td>";
				}
			}

			echo "</tr>";
		}

		echo "</table>";
	?>

</p>

</div>
</div>
