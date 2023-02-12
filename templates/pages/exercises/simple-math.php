


<?php

	$num1 = "1"; 
	$num2 = "1"; 
	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["num1"]) ) {
			$num1 = $_POST["num1"];
		}

		if (isset ($_POST["num2"]) ){
			$num2 = $_POST["num2"]; 
		}

		if (isset($_POST["clear"]) ){
       		$_POST = array();
    	}

		echo "<p>What is the first number? $num1</p>";
		echo "<p>What is the second number? $num2</p>"; 

		$addTotal = floatval($num1) + floatval($num2); 
		$subTotal = floatval($num1) - floatval($num2); 
		$divideTotal = floatval($num1)/floatval($num2); 
		$multiplyTotal = floatval($num1) * floatval($num2); 
		
		echo "<p>$num1 + $num2= $addTotal</p> ";
		echo "\r\n"; 
		echo "<p>$num1 - $num2 = $subTotal</p>";
		echo "\r\n";
		echo "<p>$num1 / $num2 = $divideTotal</p>";
		echo "\r\n";
		echo "<p>$num1 * $num2 = $multiplyTotal</p>";

	}

?>




<form method="POST">

	<div class='field'> 
		<label>What is the first number?</label>
		<input type="text" name="num1" value="<?=$num1?>">
	</div>

	<div class='field'>
		<label>What is the second number?</label>
		<input type="text" name="num2" value="<?=$num2?>">  
	</div>

	<button type="submit" name="submitted">Submit</button>
	<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
</form>

