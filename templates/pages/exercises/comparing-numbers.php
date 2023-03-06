
<?php

	$num1 = "";
	$num2 = "";
	$num3 = "";


	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["num1"]) ) {
			$num1 = $_POST["num1"];
		}

		if (isset ($_POST["num2"]) ){
			$num2 = $_POST["num2"]; 
		}

		if (isset ($_POST["num3"]) ){
			$num3 = $_POST["num3"]; 
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

		$maxNumber = max($num1, $num2, $num3);

	}

?>



<form method="POST">

	<div class='fields'> 
    <label for='num1'>Enter the first number</label> 
    <input id='num1' type='number' name='num1' value='<?=$num1?>' min='0'> 
  </div> 
  
  <div class='fields'> 
    <label for='num2'>Enter the second number</label> 
    <input id='num2' type='number' name='num2' value='<?=$num2?>' min='0'> 
  </div> 
  
  <div class='fields'> 
    <label for='num3'>Enter the third number</label> 
    <input id='num3' type='number' name='num3' value='<?=$num3?>' min='0'> 
  </div> 
        

	<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
	<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	<br> 
	<?php
		if ($num1 && $num2 != "" ) {
			echo "<p>The largest number is $maxNumber.</p>";
		} else if ($num1 && $num2 && $num3  == "" ) {
			echo "<p></p>";
		}
	?>
</form>