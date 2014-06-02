<?php

	$detailNum = $_GET['detailNum'];

	if (strlen($detailNum) == 6) {
		$bay = substr($detailNum, 0, 2);
		$row = substr($detailNum, 2, 2);
		$tier = substr($detailNum, 4, 2);
	} else {
		$bay = substr($detailNum, 0, 1);
		$row = substr($detailNum, 1, 2);
		$tier = substr($detailNum, 3, 2);
	}

?>

<div class="holder_content">
	<p>Stowage Detail - <br>
		Bay = <?php echo $bay; ?><br>
		Row = <?php echo $row; ?><br>
		Tier = <?php echo $tier; ?><br>
	</p>

	<?php
		$rows = 12; // define number of rows
		$cols = 11;// define number of columns
		 
		echo "<table border='1'>";

		for($tr=1;$tr<=$rows;$tr++){
			echo "<tr>";
			for($td=1;$td<=$cols;$td++){
				echo "<td>r: ".$tr." c: ".$td."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</div>
