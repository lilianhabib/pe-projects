

<?php

	$currentAge = " "; 
	$retireAge = ""; 
	$year = "2022"; 
	$retireYear = ""; 
	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["currentAge"]) ) {
			$currentAge = $_POST["currentAge"];
		}

		if (isset ($_POST["retireAge"]) ){
			$retireAge = $_POST["retireAge"]; 
		}

		if (isset($_POST["clear"]) ){
			$_POST = array(); 
		}

	}

	$total = floatval($retireAge) - floatval($currentAge);  
	$retireYear = floatval($year) + floatval($currentAge);


?>




<form method="POST">

	<div class='field'> 
		<label>What is your current age?</label>
		<input type="text" name="currentAge" value="<?=$currentAge?>">
	</div>

	<div class='field'>
		<label>At what age would you like to retire?</label>
		<input type="text" name="retireAge" value="<?=$retireAge?>"> 
	</div>

	<button type="submit" name="submitted">Submit</button>
	<button type="submit" name="clear">Clear</button>
	<br> 
	<br>
	<?php
		if($currentAge && $retireAge != "") {
			echo  "<p>What is your current age? $currentAge.<br> At what age would you like to retire? $retireAge.<br> You have $total years left until you can retire. <br> It's $year, so you can retire in $retireYear.</p>";
		} else if ($currentAge && $retireAge == "") {
			echo  "<p></p>";
		}
	?>

</form>
