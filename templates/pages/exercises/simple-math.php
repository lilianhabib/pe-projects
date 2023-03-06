


<?php

	$num1 = 0; 
	$num2 = 0; 
	
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

	}

		$addTotal = floatval($num1) + floatval($num2); 
		$subTotal = floatval($num1) - floatval($num2); 
		$multiplyTotal = floatval($num1) * floatval($num2); 
		
		$add = "<p>$num1 + $num2 = $addTotal</p> ";
		$subtract = "<p>$num1 - $num2 = $subTotal</p>";
		$multiply = "<p>$num1 * $num2 = $multiplyTotal</p>";

?>




<form method="POST">

	<div class='field'> 
		<label>What is the first number?</label>
		<input type="text" name="num1" value="<?=$num1?>" min='1'>
	</div>

	<div class='field'>
		<label>What is the second number?</label>
		<input type="text" name="num2" value="<?=$num2?>" min='1'>  
	</div>

	<button type="submit" name="submitted">Submit</button>
	<button type="submit" name="clear" value="<?=$clear?>">Clear</button>

	<p><?=$add?></p>
	<p><?=$subtract?></p>
	<p><?=$multiply?></p>
	<?php
		if ($num1 != 0 && $num2 != 0) {
			$divideTotal = floatval($num1)/floatval($num2); 
			$divide = "<p>$num1 / $num2 = $divideTotal</p>";
			echo $divide;
		} 
	?>
</form>

