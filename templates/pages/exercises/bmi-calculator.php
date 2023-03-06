
<?php 
	
	$height = 1; 
	$weight = 1; 
	$message1 = ""; 
	$message2 = "";
	$message3 = "";

	if (isset($_POST["submitted"])){

		if (isset($_POST["height"]) ){
			$height = $_POST["height"]; 
		}

		if (isset($_POST["weight"]) ){
			$weight = $_POST["weight"]; 
		}

		if (isset($_POST["clear"]) ){
	      $_POST = array();
	    }
	}

	
	if ($height != 0 && $weight != 0 ) {
		$bmi = floatval($weight) / floatval($height) / floatval($height) * 10000; 
	} else {
		echo 'Please enter a number greater than 0';
	}
	

	

	$bmiRounded = round($bmi, 1, PHP_ROUND_HALF_DOWN); 

	$bmiMessage = "Your BMI is: $bmiRounded";

	if ($bmiRounded >= 18.5 && $bmiRounded <=25){
		$message1 = "You are beautiful!"; 
	} else {
		$message3 = "You are one of a kind!";
	}


?>

<body>

	<form method="POST"> 

		<div class='field'>
			<label>What is your height in centimeters?</label>
			<input type="text" name="height" value="<?=$height?>"> 
		</div>

		<div class='field'>
			<label>What is your approximate weight in kilograms?</label>
			<input type="text" name="weight" value="<?=$weight?>"> 
		</div>

		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button><br>
		
		<?php 
			if ($bmiRounded >= 18.5 && $bmiRounded <=25){
				$message1 = "You are beautiful!"; 
			} else {
				$message3 = "You are one of a kind!";
			}
		?>

	</form>

	
	
</body>