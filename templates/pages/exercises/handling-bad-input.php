
<?php

	$rate = "";
	$years = "";
	$message = "";
	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["rate"]) ) {
			$rate = $_POST["rate"];
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

		$years = round(72 / $rate); 

		if ($years != "") {
			$message = "<p>It will take $years years to double your initial investment.</p>";
		} else if ($years == "") {
			$message = "<p></p>";
		} else if ($years == 0 ) {
			$message = "<p>Sorry, this is not a valid input.</p>";
		}
	}

?>



<form method="POST">

	 <div class='fields'> 
	    <label>What is the rate of return?</label> 
	    <input type='number' value='<?=$rate?>' name='rate'  min='0'> 
	  </div>
	<div class='buttons'> 
		<button type="submit" name="submitted" value="<?=$submitted?>" >Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</div>
	<br>
	<?=$message?>
</form>
