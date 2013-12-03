<?php

// set  a number of test scores
$number_of_tests = 100;


// loop through the number of tests
for($i = 0; $i < $number_of_tests; $i++)
{
	//count the number of tests
	$count = $i +1;
	//generate a number between 50 to 100
	$score = rand(50,100);
	
	//set a number of values for each grade
	if($score < 70)
	{
		$grade = 'D';
	}
	elseif($score >=70 and $score <80)
	{
		$grade = 'C';
	}
	elseif($score >=80 and $score <90)
	{
		$grade = 'B';
	}
	elseif($score >=90)
	{
		$grade = 'A';
	}	
	//output the current test score
	//output the grade of the current test

	echo 'Test number:' . $count . '<br> Your Score:' . $score . '/100 <br> 
		Your grade is:' . $grade . '<br><br>';

	//add grade of current test to number of tests with same grade
	if(isset($test_grade[$grade]))
	{
		$test_grade[$grade]++;
	}
	else
	{
		$test_grade[$grade] = 1;
	}
	
	}

// // loop through potential test scores
// //number of times a grade was received and a percentage
foreach($test_grade as $grade =>$number_grade){
	$percentage = ($number_grade/$number_of_tests)*100;
	echo $grade . ':'. $number_grade . '/' . $number_of_tests . '(' .$percentage. '%) <br>';
}







?>