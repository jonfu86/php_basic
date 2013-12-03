<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP basic 4</title>
	</head>
	<body>
		<?php
		$sample = array( 10, 2, 5, 1, 23, 59, 91, 7, 20, 18);
		sort($sample);

		$min = INF;
		$max = -INF;

		foreach($sample as $item){
			if($item < $min){
				$min = $item;
			}
			if($item > $max){
				$max = $item;
			}
		$output = array("min"=>$min, "max"=>$max);
		}

		var_dump($output);


		?>
	</body>
</html>