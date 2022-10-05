<?php  

	$num1 = 3; 
	$num = 35; 

	echo $num1 + $num . "\r\n"; 
	echo $num1 * $num . "\r\n"; 
	echo $num1 / $num . "\r\n"; 
	echo $num - $num1 . "\r\n"; 


	$myString = "Hello, this is my cat.\n"; 

	echo $myString;


	$guests = 5; 
	$berries = 4; 
	
	$total = $guests * $berries;
	echo "\r\n We need " . $total. " berries for the " . $guests . " guests that are coming to our party.";  


?>

<?php 

	$food = "pizza"; 
	$time = "lunch"; 
	$cost = 2; 
	$quantity = 5; 
	$location = "Costco";
	$total = 2 * 5; 

	echo "Today I had " . $location . " " . $food . " for " . $time . ". The pizza cost " . $total . ".";
?>

<?php
	$first = "Ruby"; 
	$last = "B"; 
	$d = date("Date"); 

	$available = false; 

	if ($available){
		echo "I'm free to chat!"; 

	}else {
		echo "I'm not free to chat, but email me so we can find some time!"; 
	}

	echo "<selection>";

	if ($d == "Fri"){
		echo "Happy Friyay!"; 
	}elseif ($d == "Wed") {
		echo "Happy Hump Day!"; 
	}else {
		echo "Hope you're having a splended day!"; 
	}

	echo "</selection>";
?>