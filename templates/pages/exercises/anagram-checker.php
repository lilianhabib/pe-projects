

<?php

	$string1 = "";
	$string2 = ""; 
	$one = "";
	$two = "";
	$message = "";

	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["string1"]) ) {
			$string1 = $_POST["string1"];
		}

		if (isset ($_POST["string2"]) ){
			$string2 = $_POST["string2"]; 
		}

		if(isset($_POST["clear"]) ){
			$_POST = array();
		}

		$one = count_chars($string1);
		$two = count_chars($string2);

		if ($one == $two && $two != "" ) {
			$message = "<p>$string1 and $string2 are anagrams</p>";
		} else if ($one != $two) {
			$message = "<p>$string1 and $string2 are not anagrams</p>";
		} else if ($two  === "" ) {
			$message = "<p></p>";
		}
	}

?>


<form method="POST">

	<div class='fields'> 
    <label for='string1'>Enter the first string</label> 
    <input id='string1' type='text' value='<?=$string1?>' name='string1'> 
  </div> 
  
  <div class='fields'> 
    <label for='string2'>Enter the second string</label> 
    <input id='string2' type='text' value='<?=$string2?>' name='string2'> 
  </div> 
  <div class='buttons'> 
		<button type="submit" name="submitted" value="<?=$submitted?>" >Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</div>
	<br>
	<?=$message?>
</form>