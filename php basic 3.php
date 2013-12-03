<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP basic 3</title>
			<?php
			$heads = 0;
			$tails = 0;
				//loop through the number of flips
			for($i=0; $i<5000; $i++)
			{	
			//count the number of flips
				$count = $i +1;
				//generate a number between 0 to 1
				$flip = rand(1,100);
				

				if($flip <= 50)
				{
					$heads ++;
					$this_flip = 'head';
				}
				else
				{
					$tails ++;
					$this_flip = 'tail';
				}
				echo 'Attempt #' .$count. ': Throwing a coin... It\'s a ' .$this_flip. '... Got ' .$heads.' head(s) so far and ' .$tails. ' tail(s) so far<br>';	
				
				$head_percent = ($heads/5000)*100;
				$tail_percent =	($tails/5000)*100; 
			}
			
				echo  $head_percent .'% were heads <br>' .$tail_percent. '% were tails';
			

			
			
			?>

	</head>
	<body>
		
	</body>
</html> 