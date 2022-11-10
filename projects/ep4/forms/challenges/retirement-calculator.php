<style>

	
	*{
		background-color: lightblue;
	}
	h1{
		color: lightseagreen;
		font-size: 20px;
		font-family: avenir;
		text-align: center;
	} 

	form{
		border: 2px solid lightgoldenrodyellow;
		padding: 5px;;
		margin-top: 50px;
		margin: 20px;
		max-width: 500px;
	}

	.fields{
		display: flex;
		flex-direction: column;
		max-width: 500px;
	}

	label, input, button{
		padding: 5px; 
	}

	input{
		margin-top: 10px;
		border: 1px solid lightslategray;
	}
	button{
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

	$currentAge = ""; 
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
	}

	echo "<p>What is your current age? $currentAge</p>";
	echo "<p>At what age would you like to retire? $retireAge</p>"; 


	$total = floatval($retireAge) - floatval($currentAge);  
	$retireYear = floatval($year) + floatval($currentAge);
	
	echo "<p>You have $total years left until you can retire.</p>";
	echo "<p>It's $year, so you can retire in $retireYear.</p>"; 

?>




<form method="POST">
	<h1>Simple Math</h1>

	<div class='field'> 
		<label>What is your current age?</label>
		<input type="text" name="currentAge" value="<?=$currentAge?>">
	</div>

	<div class='field'>
		<label>At what age would you like to retire?</label>
		<input type="text" name="retireAge" value="<?=$retireAge?>"> 
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>
