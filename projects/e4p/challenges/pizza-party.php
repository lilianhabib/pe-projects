<style>

	
	* {
		background-color: lightblue;
	}
	h1 {
		color: lightseagreen;
		font-size: 20px;
		font-family: Avenir;
		text-align: center;
	} 

	form {
		border: 2px solid lightgoldenrodyellow;
		padding: 5px;;
		margin-top: 50px;
		margin: 20px;
		max-width: 500px;
	}

	.field {
		display: flex;
		flex-direction: column;
		max-width: 500px;
	}

	label, input, button {
		padding: 5px; 
	}

	input {
		margin-top: 10
		px;
		border: 1px solid lightslategray;
	}
	button {
		margin-top: 10px;
		display: flex; 
		flex-direction: row;
		justify-content: center;
		margin-left: auto;
		margin-right: auto;
		border: 1px solid lightslategray;
	}

</style>

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
	}


	$totalPieces = floatval($people) * floatval($pieces); // 10 * 2 = 20 

	$totalBoxes = floatval($totalPieces) / floatval($pizza); //20 / 6 = 3.33 = 4 

	$rounded = ceil($totalBoxes);

	$totalPizza = floatval($rounded) * floatval($pizza) ; // 4 * 6 = 24

	$totalLeftover = floatval($totalPizza) - floatval($totalPieces) ; // 12 - 12 

	$positive = abs($totalLeftover);

	
	echo "<p>There are $people people and each person will have $pieces pieces</p>";
	echo "<p>Each box will have $pizza pieces of pizza</p>";
	echo "<p>You will need $rounded box of pizza</p>";
	echo "<p>There are $positive pieces of pizza left</p>"; 

?>




<form method="POST">
	<h1>Pizza Party</h1>

	<div class='field'> 
		<label>How many people?</label>
		<input type="text" name="people" value="<?=$people?>">
	</div>

	<div class='field'>
		<label>How many pieces of pizza will each person have?</label>
		<input type="text" name="pieces" value="<?=$pieces?>"> 
	</div>

	<button type="submit" name="submitted" value="<?=$submitted?>" >Submit</button>
</form>
