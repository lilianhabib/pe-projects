<head> 
		<meta charset="utf-8">
		<meta name="author" content="Lilian Habib">
		<meta name="description" content="[[insert description]]">

		<meta name="viewport" content="width=device-width,initial-scale=1">
</head>	

<?php
	$fruitArray = ["Apple", "Banana", "Cherries", "Date", "Elderberry"]; //list of fruits in the array 
	foreach ($fruitArray as $fruit) { // for each item in the fruit array, that is now called $fruit...
		echo "<li>" . $fruit . "</li>"; // create a list of the $fruit items 
	}
?>
	<?php foreach ($fruitArray as $fruit) { ?>
		<li><?=$fruit?></li>
	<?php } ?>

<?php
	$fruitArray = ["jack fruit", "dragon fruit", "watermelon", "orange", "figs", "grapes", "honeyberries"]; 

	foreach ($fruitArray as $fruitItem){
		echo $fruitItem; 
	}

	echo "<ol>";

	foreach ($fruitArray as $fruitItem){
		echo "<li>" . $fruitItem . "</li>";
	}

	echo "</ol>";
?>

<?php
	$shows = ["Office", "Friends", "King Of Queens", "Big Bang Theory"];

	echo "<ol>"; 

	foreach ($shows as $show){
		echo "<li>" . $show . "</li>"; 
	}

	echo "</ol>"; 

?>

<style> 
	.monster{
		display:  block;
		border: 2px solid deeppink;
	}

	.monster-list{
		display: flex;
		flex-direction: column;
	}

	@media (min-width: 700px){
		.monster-list{
			flex-direction: row;
		}
	}
</style>
<?php

	$polka = [
		"id" => "4853",
		"name" => "Polka", 
		"favouriteFood" => "pizza",
		"age" => 87,
		"adopted" => true,
		"portrait" => "https://peprojects.dev/images/portrait.jpg", 
	];

	$polkastory = "<p>" . $polka["name"] . " is " . $polka["age"] . " years old and her favourite food is " . $monster["favouriteFood"] . ". </p>"; 

	echo $polkastory; 

	$lime = [
		"id" => "6962",
		"name" => "Limabean", 
		"favouriteFood" => "vegetables",
		"age" => 12,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/portrait.jpg", 
	];

	$limestory = "<p>" . $lime["name"] . " is " . $lime["age"] . " years old and her favourite food is " . $lime["favouriteFood"] . ". </p>";

	echo $limestory; 

	$reads = [
		"id" => "1063",
		"name" => "Miss reads-a-lot", 
		"favouriteFood" => "chocolate covered almonds",
		"age" => 20,
		"adopted" => true,
		"portrait" => "https://peprojects.dev/images/portrait.jpg", 
	]; 

	$readsstory = "<p>" . $reads["name"] . " is " . $reads["age"] . " years old and her favourite food is " . $reads["favouriteFood"] . ". </p>"; 
	echo $readsstory;

	$bigmonsters = [$polka, $lime, $reads];  

	echo "<ol class='monster-list'>"; 

	foreach ($bigmonsters as $monster) {
		$name = $monster["name"]; 
		$id = $monster["id"]; 
		$story = "My favourite food is " . $monster["favouriteFood"] . " and I am " . $monster["age"] . " years old."; 
		$portrait = $monster["portrait"]; 
		$status = $monster["adopted"]; 

		if ($status == 1) {
			$status = "YES"; 
		} else {
			$status = "Not yet!"; 
		}
		echo "<li class='monster'>";

			echo 
				"<monster-card id='" . $id . "'>" .

					"<picture class='portrait'>" . 
						"<img src = '" . $portrait . "' width='100'>" . 

					"<h2 class='name'>" . $name . "</h2>" . 
				
					"<p class='story'>" . $story . "</p>" .
				
					"<p class='status'>" . $status . "</p>" . 

				"</monster-card>";

		echo "</li>";
	}

	echo "</ol>";
?>
