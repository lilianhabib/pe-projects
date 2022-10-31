<?php
	
	function myFunctionName() {
		$coffee = 3; 
		$muffin = 4;
		echo $coffee + $muffin; 
		//list of instructions/direction
	}

	// "call" "run" "invoke" the function 
	myFunctionName(); 
	// 7 

	$coffee = 13; 
	echo $coffee;
?>

<?php
	function myFunctionName1 ($parameter1, $color){ // hese are the parameters// 
		echo "The " . $parameter1 . " is " . $color . "."; 
	}

	// "pass" in the "arguments"
	myFunctionName1("hat", "purple"); 
	// "The hat is purple"

	myFunctionName1("cat", "grey");
	// "The cat is grey"
?>

<?php
	$bet = 2;

	function double($money) {
		echo $money * 2;  
	}
	double($bet);
	double(4); 
	double(8);  
?>

<?php
	function recipe($crust, $sauce, $topping1, $topping2, $cheese) {
		echo "<h2>Order</h2>";

		echo "<ol>";
			echo "<li>Use " . $crust . " crust.</li>"; 
			echo "<li>Use " . $sauce . " sauce.</li>";
			echo "<li>Use " . $topping1 . " topping.</li>";
			echo "<li>Use " . $topping2 . " topping.</li>";
			echo "<li>Use " . $cheese . " chesee.</li>";
		echo "</ol>";
	}
	recipe("thin", "tomato", "mushrooms", "basil", "mozzerella");
?>


<?php

	function monster( $name, $favouriteFood, $age) {
		echo "<h2>Monster Adoption</h2>";
		echo "<p>Hi I'm " . $name . " and my favourite food is " . $favouriteFood . " and I am " . $age . " years old.</p>";

	}
	monster("Crusty", "mushrooms", "12");
	monster("Crunchy", "crusts", "12");
	monster("Dusty", "dust", "12");
	monster("Chunky", "chunks", "12");
	monster("Chubby", "Chubs", "12");
?>


<?php

	function monsterGenerator( $name, $favouriteFood, $age) {
		$monster = [
			"name" => $name, 
			"favouriteFood" => $favouriteFood,  
			"age" => $age,
		]; 
		return $monster; 
	}
		
		$crunchy = monsterGenerator("Crunchy", "mushrooms", "12");
		$crusty = monsterGenerator("Crunchy", "crusts", "12");
		$dusty = monsterGenerator("Crunchy", "dust", "12");
		$chunky = monsterGenerator("Crunchy", "chunks", "12");
		$chubby = monsterGenerator("Crunchy", "Chubs", "12");
		
		// echo $crunchy["name"];

		$monster = [$crunchy, $crusty, $dusty, $chunky, $chubby]; 
?>
		<?php foreach ($monster as $monster) { ?>
			<li class='monster'>
				<monster-card>
					<h2 class='name'><?=$monster["name"]?></h2>

					<p class='age'><?=$monster["favouriteFood"]?></p>
					<p class='food'><?=$monster["age"]?></p>
				</monster-card>
			</li>
		<?php } ?>



<?php 
	
	function myShows($show){
		echo "I love " . $show . "."; 

	}

	myShows(Friends); 
?>

<?php
	$myShows = "Friends"; 
	echo "<p>I love the show " . $myShows . "</p>";

	$myFood = "Pizza"; 
	echo "<p>I love " . $myFood . ". </p>"; 

	$mySeason = "fall"; 
	echo "<p>My favourite season is " . $mySeason . ". </p>";

	$myBook = "To Kill a Mockingbird";
	echo "<p>My favourite book is " . $myBook . ". </p>";


	$myFavourite = [$myShows, $myFood, $mySeason, $myBook]; 

	echo "<h2>My Favourite</h2>";

	foreach ($myFavourite as $favourite){
		echo "<li>" . $favourite . "</li>"; 
	}
?>

<?php

	$favs = "dog";
	echo $favs; 
	
	function Favourites($favs) {
		echo " I love " . $favs . ".";
	}

	Favourites(cookies); 
	Favourites(popcorn); 
	Favourites(tea); 
	Favourites(plants); 
	Favourites(bread); 
	Favourites(seeds);
?>



























