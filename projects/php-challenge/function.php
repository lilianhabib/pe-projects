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





















