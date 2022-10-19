<?php 


// echo 45 + 20;

// echo "\r\n"; 

// echo 12394 - 4359; 

// echo "\r\n";

// echo 2349 * 2196;

// echo "\r\n";

// echo 1996828 / 20;

// echo "\r\n"; 

// echo "Lilian" . " " . "Habib is" . " " . 27 . " " . "years old";

// echo "\r\n";  

// echo "<h1>Hello World</h1>"; 


// $variable = "Lilian"; 

// echo "\r\n";


// $guests = 5; 
// $berries = 45; 

// $total = $guests * $berries; 

// $message = $variable . " " . "needs" . " " . $total . " ". "berries for her party."; 

// echo "\r\n";

// echo $message; 



// $name = "Lilian"; 

// $food = "pizza"; 

// $cost = 3.00;

// $number = 4;  

// $total = $cost * $number; 


// $message = $name .  " spent " . "$" . $total . " dollars on " . $number . " slices of " . $food . " for " . "$" . $cost . " dollars per slice."; 

// $message = "$name spent $total dollars on $number slices of pizza for $cost dollars each slice.";

// echo $message; 


// $guest = 10; 
// $berries = 20; 
// $people = ($guest + 1) * $berries; //for myself <!-- these stay in the code --> /* these types of comment will be left out */ // / 
// $total = $guest * $berries; 

// $message = "We'll need " . $berries . " berries for each of the " . $guest . " guests. And don't forgoet Lilian, so that will be $people  berries in total."; 

// echo $message;



// ARRAYS AND OBJECTS


// $variable = "Lilian"; 

// echo $variable; 



// $number = 1; 

// $friend1 = "Lucy"; 

// $friend2 = "Jess"; 

// echo "$number $friend1 $friend2"; 

// echo $number; 
// echo $friend1; 
// echo $friend2; 

// echo $number . $friend1 . $friend2; 


// $number = 1; 

// $friend1 = "Lucy"; 

// $friend2 = "Jess"; 

// $myNumbers = [23, 11, 7, 14, 17];

// $myStrings = ["apples", "banana", "berries", "mango"];

// $myList = ["apples", 1 , "banana", 6, "berries", 5, true];


// foreach ($myNumbers as $number) {
// 	echo $number;
// }

// foreach ($myStrings as $string){
// 	echo "\r\n Item: $string,"; 
// }

// foreach ($myList as $list){
// 	echo "<li>$list</li>"; 
// }

// for ($counter = 0; $counter < 10; $counter++){
// 	echo "<li>$counter</li>"; 
// }

// for ($cat = 0; $cat <= 20; $cat++){
// 	echo "<li>$cat</li>"; 
// }


// $favBand = ["Oh Hellos", "City and Colour", "Hedley", "Rex", "Hillsong"]; 

// foreach ($favBand as $band){
// 	$message = "I really like the band $band"; 
// 	echo "<li>$message</li>";  
// }

// $favNumber = [11, 17, 7, 14, 10, 56, 80, 23];

// foreach ($favNumber as $number){
// 	if ($number < 20) {
// 		echo "<li>$number</li>";
// 	}
// }


// for ($counter = 0; $counter <= 34; $counter = $counter + 1) {

// 	if ($counter !== 12 && $counter !== 17 && $counter !==23) {
// 	echo "<li>$counter</li>";
// 	}
// }


// $name = "Lilian"; 

// echo "<p>Hello, $name.</p>"; 



// $coffee = 2.99; 
// $sandwich = 6.99;
// $tax = 0.10; 

// $tax = ($coffee + $sandwich) * $tax;
// $total = $tax + $coffee + $sandwich; 
// $formatTotal = "$" . number_format($total, 2, ".", ","); 

// echo "<p>The total is: $formatTotal.</p>"; 



?>

<!-- <link rel="stylesheet" href="practice-styles.css"> 


<?php include ('practice-data.php');?>


<ol class='cat-list'> 

	<?php foreach ($cats as $cat){ ?>
		<cat-info> 
			<li><?php echo $cat['breed'];?></li>
			<p><?=$cat['color'];?></p>
		</cat-info>
	<?php } ?>

</ol>



 -->

<link rel="stylesheet" href="practice-styles.css">

	<?php include ("practice-data.php");?>

	
	<weather-list> 
		<?php foreach ($weathers as $weather){ ?>

			<weather-grid> 
				<h2><?=$weather['season'];?></h2>
				<p>Temperature: <?php echo $weather['temperature'];?></p>
				<p>What makes the season special: <?=$weather['special'];?></p>
			</weather-grid>

		<?php } ?>
	</weather-list>


<link rel="stylesheet" href="practice-styles.css">

<?php include ('practice-data.php'); ?>

	<clothing-list> 
		<?php foreach ($clothes as $clothingItem) {

			// if ($clothingItem ['onSale']) {
			// 	$banner = "<p class='sign'>On Sale</p>"; 
			// }

		?>

			<clothing-item>

				<h1><?=$clothingItem['brand'] ?></h1>
				<p><?=$clothingItem['item'] ?></p>
				<p><?=$clothingItem['size'] ?></p>
				<p><?=$clothingItem['price'] ?></p>

			</clothing-item>
		<?php } ?>
	</clothing-list>






























