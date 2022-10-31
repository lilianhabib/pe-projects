<?php 

	$cafeData = file_get_contents("cafe.json");
	var_dump($cafeData);

	$name= "";

	$hasName = false;
	$nameError = false;

	$formSubmitted = isset($_POST["submitted"]); 

		if ($formSubmitted) {

			if (isset ($_POST["name"]) ) {
				$name = $_POST["name"]; 
				
				if (strlen($name) > 0 ) {
					$hasName = true;

					

					
					//Create cafe

					$newCafe = [
						"name" => $name, 
					];
					var_dump($newCafe);

				
					$cafe_Json = json_encode($newCafe); 

					// save json
					file_put_contents('cafe.json', $cafe_Json);



				} else {
					$nameError = "Please add a cafe name"; 
				}
		
			}

		}
	
?>

<h1 class="loud-voice">Add a Java</h1>

<form method="POST">
	<field>
		<label>Cafè Name</label>
		<input type="text" name="name" value="<?=$name?>" placeholder="Name of the Cafè">
		<?php if ($nameError) { ?>
			<p class="error"><?=$nameError?></p>
		<?php } ?>
	</field>


	<button type="submit" name="submitted" class="button">Submit</button>


</form>






<!-- $hasPrice = false;
	$hasHours = false; 
	$hasAddress = false;
	$hasWifi = false;


	$priceError = false;



	
			if (isset ($_POST["address"]) ) {
				$address = $_POST["address"]; 
				
				if (strlen($address) > 0 ) {
					$hasAddress = true;
				} else {
					$addressError = "Please add an address"; 
				}
		
			}

			if (isset ($_POST["hours"]) ) {
				$hours = $_POST["hours"]; 
				
				if (strlen($hours) > 0 ) {
					$hasHours = true;
				} else {
					$hoursError = "Please add add cafe hours"; 
				}
		
			}

			if (isset ($_POST["wifi"]) ) {
				$wifi = $_POST["wifi"]; 
				
				if (strlen($wifi) > 0 ) {
					$hasWifi = true;
				} else {
					$wifiError = "Please add add cafe hours"; 
				}
		
			}


			if (isset ($_POST["price"]) ) {
				$price = $_POST["price"]; 
				
				if (strlen($price) > 0 ) {
					$hasPrice = true;
				} else {
					$priceError = "Please add add cafe hours"; 
				}
		
			}

			if ($hasType && $hasAddress && $hasHours && $hasPrice) {
				$cafe = [
					$type => $_POST["type"], 
					$address => $_POST["address"], 
					$hours => $_POST["hours"], 
					$price => $_POST["price"], 
				]; 
			} else {
 -->



<!-- 
<h1 class="loud-voice">Add a Java</h1>

<form method="POST">
	<field>
		<label>Cafè Name</label>
		<input type="text" name="name" value="<?=$name?>">
		<?php if ($nameError) { ?>
			<p class="error"><?=$nameError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Address</label>
		<input type="address" name="address"value="<?=$address?>"> 
		<?php if ($addressError) { ?>
			<p class="error"><?=$addressError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Wifi is Available</label>
		<input type="text" name="wifi"value="<?=$wifi?>" placeholder="Yes or No"> 
		<?php if ($wifiError) { ?>
			<p class="error"><?=$wifiError?></p>
		<?php } ?>
	</field>



	<field>
		<label>Hours</label>
		<span>Open</span>
		<input type="time" name="hours"value="<?=$hours?>">
		<span>Close</span>
		<input type="time" name="hours"value="<?=$hours?>">
		<?php if ($hoursError) { ?>
			<p class="error"><?=$hoursError?></p>
		<?php } ?>
	</field>


	<field>
		<label>Price</label>
		<input type="text" name="price"value="<?=$price?>" placeholder="$, $$, or $$$"> 
		<?php if ($priceError) { ?>
			<p class="error"><?=$priceError?></p>
		<?php } ?>
	</field>



	<button type="submit" name="submitted" class="button">Submit</button>


</form>

 -->











