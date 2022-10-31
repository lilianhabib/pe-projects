<style> 
	body{
/*		background-color: red;
		background-color: #ff0066;
		background-color: rgb(255, 10, 70);
		background-color: rgba(255, 10, 50, .5);*/
		background-color: hsl(60, 87%, 50%, .5);
	}
</style>

<body> 
<?php


$price = 34; 

$tax = $price * .13; 

$total = $price + $tax; 

echo "<h1>Percent tip: " . $total . "%</h1>";  

$percent = 10; 

if ($percent == 0){
	$tip = 0; 
}

if ($percent == 10){
	$tip = $total * (10/100); 
}

if ($percent == 15){
	$tip = $total * (15/100);
}

$total = $total + $tip; 

echo "<p>The total is: $" . $total . "</p>"; 


if ($percent > 20){
	echo "Wowza - what a tippa!"; 
}
?>


<?php
	$foodBudget = 100; 
	$vacationBudget = 50; 
	$petBudget = 7000; 
	$pizzaBudget = 24; 

	$totalBudget = $foodBudget + $vacationBudget + $petBudget + $pizzaBudget; 

	echo "<p>My total budget for this month: $" . $totalBudget . " dollars. </p>";

	$allowance = 20; 

	if ($allowance == 10){
		$total = $allowance + $totalBudget; 
	} if ($allowance = 15){
		$total = $allowance + $totalBudget; 
	} if ($allowance = 20){
		$total = $allowance + $totalBudget; 
	}

	$total = $allowance + $totalBudget;
	echo "<p>My total allowance and budget is: $". $total . " dollars </p>"; 

	echo "<p>The total is: $$total</p>";
?>

<?php
	$myStuff = [1, 456, true, false, "Lilian", "Chai"]; 

	$name = ["Gerry", "Four", "trees", "laptop"]; 

	$favouriteThings = $myStuff[5];

	echo $favouriteThings; 
?>

<p>My favourite thing is <?=$favouriteThings?></p>

<?php
	
	$cat = [
		"eyes" => "green", 
		"fur" => "grey", 
		"nose" => true, 
		"feet" => "four",
		"toes" => 18, 
		"ears" => 2, 
		"whiskers" => "nine", 
		"breed" => ["domestic shorthair", "hair"],  //for some reason this shows up as Array when there is more than one value 
	];
	//This is an associative array - it associates a key with a value. Instead of accessing the array with numbers, you can write echo $cat["name"]; 


	echo $cat["breed"];
?>
<p>My cat is <?=$cat["fur"]?></p>
<p>My cat is a <?=$cat["breed"][0]?>, <?=$cat["breed"][1]?>, <?=$cat["breed"][2]?></p>

<?php
	$chores = [
		"kitchen" => ["dishes"],
		"livingRoom" => ["vaccum"],
		"office" => ["vaccum","dusting"],
	];

	echo $chores["office"];

	echo "<p>I need to do $cat[eyes]</p>";
?> 

</body>















