
<?php 
	
	$price1 = "";
	$price2 = ""; 
	$price3 = ""; 
	$quantity1 = ""; 
	$quantity2 = ""; 
	$quantity3 = ""; 
	$taxNumber = 5.5 / 100.0; 
	$message1 = "";
	$message2 = "";
	$message3 = "";

	if (isset($_POST["submitted"]) ) {

		if (isset($_POST["price1"]) ) {
			$price1 = $_POST["price1"];
		}

		if (isset($_POST["quantity1"]) ) {
			$quantity1 = $_POST["quantity1"]; 
		}

		if (isset($_POST["price2"]) ) {
			$price2 = $_POST["price2"]; 
		}

		if (isset($_POST["quantity2"]) ) {
			$quantity2 = $_POST["quantity2"]; 
		}

		if (isset($_POST["price3"]) ) {
			$price3 = $_POST["price3"]; 
		}

		if (isset($_POST["quantity3"]) ){
			$quantity3 = $_POST["quantity3"];
		}

		if (isset($_POST["clear"]) ){
        $_POST = array();
    }

		$subtotal = floatval($price1) * floatval($quantity1) + floatval($price2) * floatval($quantity2) + floatval($price3) * floatval($quantity3);
		$subtotalFormat = round($subtotal, 2);
		$message1 = "<p>Subtotal: $$subtotalFormat</p>";



		$tax = 5.5 / 100.0; 
		$totalTax = floatval($subtotal) * floatval($tax); 
		$totalTaxFormat = round($totalTax, 2);
		$message2 = "Tax: $$totalTaxFormat"; 


		$totalCost = floatval($totalTaxFormat) + floatval($subtotal); 
		$totalCostFormat = round($totalCost, 2);
		$message3 = "Total: $$totalCostFormat"; 
	}

	




?>


<form method="POST"> 


	<div class="field">
		<label>Enter the price of item 1:</label>
		<input type="text" name="price1" value="<?=$price1?>">
	</div>
	
	<div class="field"> 
		<label>Enter the quantity of item 1:</label>
		<input type="number" name="quantity1" min="1" value="<?=$quantity1?>"> 
	</div>

	<div class="field">
		<label>Enter the price of item 2:</label>
		<input type="text" name="price2" value="<?=$price2?>"> 
	</div>

	<div class="field">
		<label>Enter the quantity of item 2:</label>
		<input type="number" name="quantity2" min="1" value="<?=$quantity2?>"> 
	</div>

	<div class="field">
		<label>Enter the price of item 3:</label>
		<input type="text" name="price3" value="<?=$price3?>">
	</div>

	<div class="field"> 
		<label>Enter the quantity of item 3:</label>
		<input type="number" name="quantity3" min="1" value="<?=$quantity3?>">
	</div>

	<div class='buttons'> 
		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</div>
	<br>
	<p><?=$message1?></p>
	<p><?=$message2?></p>
	<p><?=$message3?></p> 

</form>


