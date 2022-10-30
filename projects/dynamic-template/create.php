<?php 

	$type= "";
	$condition= 3;
	$price= 0;

	$hasprice = false;
	$hasType = false;


	$priceError = false;
	$typeError = false;
	if (isset($_POST["add"])){


		if (isset ($_POST["type"]) ) {
			$type = $_POST["type"]; 
			
			if (strlen($type) > 0 ) {
				$hasType = true;
			} else {
				$typeError = "Please add a bone type"; 
			}
	
		}


		if (isset ($_POST["condition"]) ) {
			$condition = $_POST["condition"]; 
	
		}

		if (isset ($_POST["price"]) ) {
			$price = $_POST["price"]; 
	
			if ( intval ($price > 0) ) {
				$hasPrice = true;

			} else {
				$priceError = "Please add a price."; 
			}
	
		}

		if ($hasType && $hasPrice) {
			$bone = [
				$type => $_POST["type"], 
				$id => $_POST["id"], 
				$condition => $_POST["condition"], 
				$price => $_POST["price"], 
			]; 
		} else {

		}

	}
?>

<h1>Create</h1>

<form method="POST">
	<ield>
		<label>Type</label>
		<input name="type" value="<?=$type?>">
		<?php if ($typeError) { ?>
			<p class="error"><?=$typeError?></p>
		<?php } ?>
	</field>

	<field>
		<lable>Range</lable>
		<input type="range" min="1" max="5" value="<?=$condition?>" name="condition">
	</field>

	<field>
		<label>Price</label>
		<input type="number" name="price"value="<?=$price?>"> 
		<?php if ($priceError) { ?>
			<p class="error"><?=$priceError?></p>
		<?php } ?>
	</field>

	<button type="submit" name="add" class="button">Submit</button>


</form>












