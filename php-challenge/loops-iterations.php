<?php
	$fruitArray = ["Apple", "Banana", "Cherries", "Date", "Elderberry"]; //list of fruits in the array 
	foreach ($fruitArray as $fruit) { // for each item in the fruit array, that is now called $fruit...
		echo "<li>" . $fruit . "</li>"; // create a list of the $fruit items 
	}
?>
	<?php foreach ($fruitArray as $fruit) { ?>
		<li><?=$fruit?></li>
	<?php } ?>
