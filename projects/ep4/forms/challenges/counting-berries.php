<style>
	label, input, button{ 
		padding: 5px; 

	}

	form{
		max-width: 400px;
		
	}
	.field {
		display: block;
		display: flex; 
		flex-direction:  column;
	}

	.field label{
		font-size: 14px;
		margin-bottom: 4px; 
	}

	input{ /*does not inherit the same font as the rest of the page*/
		display: block;

	}

	/*button*/ [type='submit'], .field + .field{
		margin-top: 10px;
	}
</style>




<?php 

	$guests = 2; 
	$berries = 4; 

	if ( isset($_POST ["submitted"]) ) {  //press submit button

		if ( isset($_POST["guests"]) ){ //It'll be 0 at first, but if you typed a value, 0 will be replaced 
			if ( $_POST["guests"] >=0 ){ 
			$guests = $_POST["guests"]; 
			}
		}

		if ( isset($_POST["berries"]) ){ //It'll be 0 at first, but if you didn't type a value, it will stay 0 
			$berries = $_POST["berries"]; 
		}


		$total = floatval($guests)* floatval($berries); //then it will take the numbers and make sure it is a number and output a total.

		echo "<p class='feedback'>$total</p>"; 
	}

?>



<form method="POST">

	<p>Berries Form</p>

<!-- 	<div class='field'> 
		<label>Name</label>
		<input type="text" name='name'> 
	</div>
 -->
	<div class='field'>
		<label>Guests</label>
		<input type="number" name='guests' value = "<?=$guests?>" min='0'> 
	</div>

	<div class='field'>
		<label>Berries</label>
		<input type="number" name='berries' value = "<?=$berries?>" min='0'> 
	</div>


	<button type='submit' name='submitted'>Push Me</button>


</form>
