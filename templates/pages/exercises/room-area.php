
<?php

	$length = "";
	$width = ""; 
	$message = "";

	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["length"]) ) {
			$length = $_POST["length"];
		}

		if (isset ($_POST["width"]) ){
			$width = $_POST["width"]; 
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

		$squareFeet = floatval($length) * floatval($width);
		$squareMeter = round(floatval($squareFeet) * 0.09290304);

		if ($length && $width != "" ) {
			$message = "<p>The area is $squareFeet square feet and $squareMeter square meters.</p>";
		} else if ($length && $width == "" ) {
			$message = "<p></p>";
		}
	}

?>



<form method="POST">

	<div class='fields'> 
      <label for='length'>What is the length of the room in feet?</label> 
      <input id='length' type='number'  name='length' value='<?=$length?>' min='0'> 
    </div>  
    
    <div class='fields'> 
      <label for='width'>What is the width of the room in feet?</label> 
      <input id='width' type='number' name='width' value='<?=$width?>' min='0'> 
    </div> 
    <div class='buttons'> 
			<button type="submit" name="submitted" value="<?=$submitted?>" >Submit</button>
			<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
		</div>
		<br>
		<?=$message?>
</form>
