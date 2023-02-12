
<?php 
	
	$orderAmount = ""; 
	$province = ""; 
	$totalTax = "$"; 
	$total = ""; 
	$tax = ""; 


	if (isset($_POST["submitted"]) ){

		if(isset($_POST["orderAmount"]) ){
			$orderAmount = $_POST["orderAmount"]; 
		}

		if (isset($_POST["province"]) ){
			$province = $_POST["province"]; 
		}

		if (isset($_POST["clear"]) ){
       		$_POST = array();
    	}

		if ($province == "Ontario"){
			$tax = "0.13"; 
		} else if ($province === "Northwest Territories"){
			$tax = "0.05"; 
		} else if ($province === "Nova Scotia") {
			$tax = "0.15"; 
		} else if ($province === "Nunavut"){
			$tax = "0.05"; 
		} else if ($province === "Quebec"){
			$tax = "0.05"; 
		} else if ($province === "Prince Edward Island"){
			$tax = "0.15"; 
		} else if ($province === "Saskatchewan"){
			$tax = "0.05"; 
		} else if ($province === "Yukon") {
			$tax = "0.05"; 
		} else if ($province === "British Columbia") {
			$tax = "0.12"; 
		} else if ($province === "Alberta") {
			$tax = "0.05"; 
		} 
		//else {
		// 	$tax = ""; 
		// }

		$totalTax = floatval($tax) * floatval($orderAmount);
		$orderAmountMessage = "The subtotal is $$orderAmount.00 <br>";
		$totalTaxMessage = "The tax is $$totalTax"; 
		$total = floatval($totalTax) + floatval($orderAmount);
		$totalMessage = "The total is $$total";

		echo $orderAmountMessage;
		echo $totalTaxMessage;
		echo $totalMessage;

	}


	
?>

<body> 

	<form method="POST">

		<div class='field'> 
			<label>What is the order amount?</label>
			<input type='text' name='orderAmount' value='<?=$orderAmount?>'>
		</div>

		<div class='field'> 
			<label>What is the province?</label>
			<input type='text' name='province' value='<?=$province?>'>
		</div>

		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		<button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	</form>

<!-- 	<p><?=$orderAmountMessage?></p>
	<p><?=$totalTaxMessage?></p>
	<p><?=$totalMessage?></p>
 -->
</body>