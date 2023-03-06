
<?php

	$name = "";
	$length = "";
	$message = "";

	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["name"]) ) {
			$name = $_POST["name"];
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

		$length = strlen($name);

		if ($length != "" ) {
			$message = "<p>Here, $name. There are $length characters in your name.</p>";
		} else if ($length == "" ) {
			$message = "<p></p>";
		}
	}

?>



<form method="POST">

	<div class='fields'> 
	    <label for='name'>What is your name?</label> 
	    <input id='name' type='text' name='name' value='<?=$name?>'>
	</div>  
    
    
	<div class='buttons'> 
		<button type="submit" name="submitted" value="<?=$submitted?>" >Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</div>
	<br>
	<?=$message?>
</form>