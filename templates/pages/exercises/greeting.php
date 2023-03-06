


<?php
// SETUP
	$name = ""; 

	$greeting = ""; 
	$message = "";


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

    	if ($name != "" ) {
			$message = "<p class='greeting'>$greeting $name.</p>"; 
    	} else {
    		$message = "<p></p>";
    	}

	}


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
	<div class='buttons'> 	
		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</div>
	 <br>
	<?=$message?>

</form>
