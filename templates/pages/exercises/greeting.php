


<?php
// SETUP
	$name = ""; 

	$greeting = ""; 


	// USER INPUT
	if (isset($_POST['submitted'])){

		if (isset($_POST["name"])){
			$name = $_POST["name"];
		}

		if (isset ($_POST["greeting"])){
			$greeting = $_POST["greeting"]; 
		}

		if (isset($_POST["clear"]) ){
      $_POST = array();
    }

			echo "<p class='greeting'>$greeting $name.</p>"; 

	}


// CALCULATION/PRCOESSIN

		// echo "<p class='greeting'>Hello, nice to meet you, $name.</p>"; 

?>


<form method="POST">

	 <div class='field'>
	 	<label>What is your name?</label>
	 	<input type="text" name="name" value="<?=$name?>">  
	 </div>

	 <div class='field'> 
	 	<label>What is your greeting?</label>
	 	<input type='text' name="greeting" value="<?=$greeting?>"> 
	</div> 	

	 <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
	 <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

</form>
