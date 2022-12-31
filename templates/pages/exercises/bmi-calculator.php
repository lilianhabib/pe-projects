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
	
	$height = ""; 
	$weight = ""; 
	$message1 = ""; 
	$message2 = "";
	$message3 = "";

	if (isset($_POST["submitted"])){

		if (isset($_POST["height"]) ){
			$height = $_POST["height"]; 
		}

		if (isset($_POST["weight"]) ){
			$weight = $_POST["weight"]; 
		}
	}


	$bmi = floatval($weight) / (floatval($height) * floatval($height)) * 703; 

	$bmiRounded = round($bmi, 1, PHP_ROUND_HALF_DOWN); 

	$bmiMessage = "Your BMI is: $bmiRounded";

	if ($bmiRounded >= 18.5 && $bmiRounded <=25){
		$message1 = "The earth says hello"; 
	} else {
		$message3 = "It's time to party";
	}


?>

<body>

	<form method="POST"> 

		<h1>BMI Calculator</h1>

		<div class='field'>
			<label>What is your height in inches?</label>
			<input type="text" name="height" value="<?=$height?>"> 
		</div>

		<div class='field'>
			<label>What is your approximate weight in pounds?</label>
			<input type="text" name="weight" value="<?=$weight?>"> 
		</div>

		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		
	</form>

	<p><?=$message1?></p>
	<p><?=$message2?></p>
	<p><?=$message3?></p>
	<p><?=$bmiMessage?></p>
</body>