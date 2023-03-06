


<?php

	$people = ""; 
	$pieces = ""; 
	$pizza = "6";
	$totalLeftover = ""; 
	$totalBoxes = ""; 
	$totalPieces = ""; 
	$totalPizza = ""; 
	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["people"]) ) {
			$people = $_POST["people"];
		}

		if (isset ($_POST["pieces"]) ){
			$pieces = $_POST["pieces"]; 
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

	}


	$totalPieces = floatval($people) * floatval($pieces); // 10 * 2 = 20 

	$totalBoxes = floatval($totalPieces) / floatval($pizza); //20 / 6 = 3.33 = 4 

	$rounded = ceil($totalBoxes);

	$totalPizza = floatval($rounded) * floatval($pizza) ; // 4 * 6 = 24

	$totalLeftover = floatval($totalPizza) - floatval($totalPieces) ; // 12 - 12 

	$positive = abs($totalLeftover);

?>




<form method="POST">

	<div class='field'> 
		<label>How many people?</label>
		<input type="text" name="people" value="<?=$people?>">
	</div>

	<div class='field'>
		<label>How many pieces of pizza will each person have?</label>
		<input type="text" name="pieces" value="<?=$pieces?>"> 
	</div>

	<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
	<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	<br>
	<br>
	<?php
		if($people && $pieces != "") {
			echo  "<p>There are $people people and each person will have $pieces pieces.<br> Each box will have $pizza pieces of pizza.<br> You will need $rounded box of pizza.<br> There are $positive pieces of pizza left.</p>";
		} else if ($people && $pieces == "") {
			echo  "<p></p>";
		}
	?>


</form>
