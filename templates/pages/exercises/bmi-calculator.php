
<?php 
	
	$height = ""; 
	$weight = ""; 
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


	$bmi = floatval($weight) / (floatval($height) * floatval($height)) * 703; 

	$bmiRounded = round($bmi, 1, PHP_ROUND_HALF_DOWN); 

	$bmiMessage = "Your BMI is: $bmiRounded";

	if ($bmiRounded >= 18.5 && $bmiRounded <=25){
		$message1 = "The earth says hello"; 
	} else {
		$message3 = "It's time to party";
	}


?>

<body>

	<form method="POST"> 

		<h1>BMI Calculator</h1>

		<div class='field'>
			<label>What is your height in inches?</label>
			<input type="text" name="height" value="<?=$height?>"> 
		</div>

		<div class='field'>
			<label>What is your approximate weight in pounds?</label>
			<input type="text" name="weight" value="<?=$weight?>"> 
		</div>

		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
		
	</form>

	<p><?=$message1?></p>
	<p><?=$message2?></p>
	<p><?=$message3?></p>
	<p><?=$bmiMessage?></p>
</body>