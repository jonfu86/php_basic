<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP Basic 2</title>

	<?php

	
	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');



	?>

	</head>
	<body>
		<?php 
		echo "<select>";
			for($i=0; $i<count($states); $i++){
			  echo "<option>" .$states[$i]. "</option>";
			  }			 
			echo "</select>";
		?>

		<?php
		echo "<select>";
			foreach($states as $state){
			  echo "<option>" .$state. "</option>";
			  }			 
			echo "</select>";
		?>

		<?php
		$states[] = 'NJ';
		$states[] = 'NY';
		$states[] = 'DE';
		
		echo "<select>";
			foreach($states as $state){
			  echo "<option>" .$state. "</option>";
			  }			 
			echo "</select>";
		?>
	</body>
</html>
