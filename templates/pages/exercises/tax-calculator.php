<head>
	<meta name="author" content="Lilian Habib">
	<head> 
	<meta charset="utf-8">
	<meta name="description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">

	<meta name="viewport" content="width=device-width,initial-scale=1">


	<meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/lilian1.png">


	<link rel="shortcut icon" href="images/lilian1.png" type="image/png">

	<link rel='stylesheet' href='style.css'>

	<!-- font --> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">


	<!-- Facebook Meta Tags -->
	  <meta property="og:url" content="https://peprojects.dev/alpha-5/lilian/">
	  <meta property="og:type" content="website">
	  <meta property="og:title" content=" index ">
	  <meta property="og:description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">
	  <meta property="og:image" content="https://peprojects.devimages/metalilian.png?hello">

	  <!-- Twitter Meta Tags -->
	  <meta name="twitter:card" content="summary_large_image">
	  <meta property="twitter:domain" content="peprojects.dev">
	  <meta property="twitter:url" content="https://peprojects.dev/alpha-5/lilian">
	  <meta name="twitter:title" content=" index ">
	  <meta name="twitter:description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">
	  <meta name="twitter:image" content="https://peprojects.devimages/metalilian.png">

	<title>Exercises for Programmers</title>
</head> 

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


	
?>

<body> 

	<form method="POST">
		<h1>Tax Calculator</h1>

		<div class='field'> 
			<label>What is the order amount?</label>
			<input type='text' name='orderAmount' value='<?=$orderAmount?>'>
		</div>

		<div class='field'> 
			<label>What is the province?</label>
			<input type='text' name='province' value='<?=$province?>'>
		</div>

		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
	</form>

	<p><?=$orderAmountMessage?></p>
	<p><?=$totalTaxMessage?></p>
	<p><?=$totalMessage?></p>

</body>