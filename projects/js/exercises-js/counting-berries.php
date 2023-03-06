<!doctype html> 

<html>

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
z




<?php 

	$guests = 2; 
	$berries = 4; 

	if ( isset($_POST ["submitted"]) ) {  //press submit button

		if ( isset($_POST["guests"]) ){ //It'll be 0 at first, but if you typed a value, 0 will be replaced 
			if ( $_POST["guests"] >=0 ){ 
			$guests = $_POST["guests"]; 
			}
		}

		if ( isset($_POST["berries"]) ){ //It'll be 0 at first, but if you didn't type a value, it will stay 0 
			$berries = $_POST["berries"]; 
		}


		$total = floatval($guests)* floatval($berries); //then it will take the numbers and make sure it is a number and output a total.

		echo "<p class='feedback'>$total</p>"; 
	}

?>



<form method="POST">

	<p>Berries Form</p>

<!-- 	<div class='field'> 
		<label>Name</label>
		<input type="text" name='name'> 
	</div>
 -->
	<div class='field'>
		<label>Guests</label>
		<input type="number" name='guests' value = "<?=$guests?>" min='0'> 
	</div>

	<div class='field'>
		<label>Berries</label>
		<input type="number" name='berries' value = "<?=$berries?>" min='0'> 
	</div>


	<button type='submit' name='submitted'>Push Me</button>


</form>
