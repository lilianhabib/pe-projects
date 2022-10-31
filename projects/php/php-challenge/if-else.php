<?php

	$cost = 50; 

	if ($cost == 50) {
		echo "<p>yes</p>";
	} elseif ($cost > 50) {
		echo "<p>no</p>";
	} else {
		echo "<p>maybe</p>"; 
	}

	$name = "Sun"; 

	if ($name == "Sun"){
		echo "<p>Hello, Sun</p>";
	} else {
		echo "<p>Welcome</p>"; 
	}

	$animal = "horse";

	if ($animal == "snake"){
		echo "<p>Get it!</p>"; 
	} else {
		echo "<p>Maybe next time</p>"; 
	}

	$tip = 20; 

	if ($tip == 20) {
		echo "<p>Thank you!</p>";
	} elseif ($tip > 20) {
		echo "<p>Wowza, What a tippa</p>"; 
	} else {
		echo "<p>Well, I did foget to bring them the food...</p>"; 
	}

	$weather = "snow"; 

	if ($weather == "rain"){
		echo "<p>Stay inside!</p>";
	} elseif ($weather == "sun"){
		echo "<p>Let's go to the beach</p>";
	} else {
		echo "<p>Let's check the weather!</p>"; 
	}
?>