
<?php

	$name = "";
	$length = "";
	

	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["name"]) ) {
			$name = $_POST["name"];
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

		$length = strlen($name);
	}

?>



<form method="POST">

	<div class='fields'> 
	    <label for='name'>What is your name?</label> 
	    <input id='name' type='text' name='name' value='<?=$name?>'>
	</div>  
    
    

	<button type="submit" name="submitted" value="<?=$submitted?>" >Submit</button>
	<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	<br>
	<?php
		if ($length != "" ) {
			echo "<p>Here, $name. There are $length characters in your name.</p>";
		} else if ($length == "" ) {
			echo "<p></p>";
		}
	?>
</form>