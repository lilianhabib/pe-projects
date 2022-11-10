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

	$noun = "";
	$adjective = "";
	$adverb = "";
	$verb = "";
	
	if (isset($_POST["submitted"])){

		if (isset($_POST["noun"])){
			$noun = $_POST["noun"];
		}

		if (isset($_POST["verb"])){
			$verb = $_POST["verb"];
		}

		if (isset ($_POST["adjective"])){
			$adjective = $_POST["adjective"]; 
		}

		if (isset ($_POST["adverb"])){
			$adverb = $_POST["adverb"]; 
		}
	}


	$message4 = "<p>Do you $verb your $adjective $noun $adverb? That's hilarious.</p>";

	echo $message4;
?>

<form method="POST">
	<h1>Mad LIbs</h1>

	<div class='field'>
		<label>Enter a noun</label>
		<input type="text" name="noun" value="<?=$noun?>">  
	</div>


	<div class="field">
		<label>Enter a verb</label>
		<input type="text" name="verb" value="<?=$verb?>">  
	</div>

	<div class="field">
		<label>Enter an adjective</label>
		<input type="text" name="adjective" value="<?=$adjective?>">  
	</div>

	<div class="field">
		<label>Enter an adverb</label>
		<input type="text" name="adverb" value="<?=$adverb?>">  
	</div>

	<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>


</form>

<p><?=$message4?></p> 
