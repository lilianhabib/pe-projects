
<?php

	$noun = "";
	$adjective = "";
	$adverb = "";
	$verb = "";
	$message = "";
	
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

		if (isset($_POST["clear"]) ){
      $_POST = array();
    }

		if ($verb && $noun && $adjective && $adverb != "") {
			$message = "<p>Do you $verb your $adjective $noun $adverb? That's hilarious.</p>";
		} else {
			$message = "";
		}
		

	}






?>

<form method="POST">

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

	<div class='buttons'> 
		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</div>
	<br>
	<?=$message?>
</form>


