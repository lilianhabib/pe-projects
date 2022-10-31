
<?php

	$cat = "Chai"; 
	echo $cat;

	$number = 234; 
	$friend1 = "Jess"; 
	$friend2 = "Nicky"; 

	echo "$number $friend1 $friend2"; 

	echo $number . $friend1 . $friend2; 

?>

<p><?=$number?><?=$friend1?><?=$friend2?></p>

<?php 
	// $numberArray = [34, 466, 23, 2136, 67]; 
	// $stringArray = ["banana", "mango", "berries", "jackfruit", "pineapple"]; 
	// $numStrArray = [2, "banana", 3, "mango", 6, "berries"];
	// // echo $numberArray[3]; 
	// // echo $stringArray[1];
	// // echo $numStrArray[0];

	// foreach ($numberArray as $number){
	// 	echo $number; 
	// }

	// foreach ($stringArray as $string){
	// 	echo "<li>" . $string . "</li>";
	// }

	// foreach ($numStrArray as $numStr){
	// 	echo "<li>" . $numStr . "</li>";
	// }

	// for ($counter = 0; $counter < 20; $counter++) {
	// 	//start at 0 ; but do not go greater than 20 ; add one each time // 
	// 	echo "<li>$counter</li>";
	// }

	// for ($myNumber = 1; $myNumber < 50; $myNumber++){
	// 	echo "<li>$myNumber</li>";
	// }
?>

<?php 
	$bands = ["Rex Orange County", "ASTN", "The Oh Hellos", "Daniel Caesar", "Woodlock", "City and Colour"]; 
	
	foreach ($bands as $band){
		$message = "I really like the band $band."; 
		echo "<li>$message</li>"; 
		print_r ($message); 
	}

	$favnumbers = [1, 2, 3, 4, 5, 6, 7, 8]; 
	foreach ($favnumbers as $favnumber){
		echo "<li>$favnumber</li>"; 
	}

	for ($num = 0; $num <= 34; $num++){
		if ($num != 12 && $num != 17 && $num != 23){
		echo $num;
		}
	}


?>


