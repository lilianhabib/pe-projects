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


<?php

	$people = ""; 
	$pieces = ""; 
	$pizza = "";
	$totalLeftover = ""; 
	$totalBoxes = ""; 
	$totalPieces = "1"; 
	$totalPizza = ""; 
	
	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["people"]) ) {
			$people = $_POST["people"];
		}

		if (isset ($_POST["pieces"]) ){
			$pieces = $_POST["pieces"]; 
		}
		if (isset($_POST["clear"]) ){
      $_POST = array();
    }

    
	$totalPieces = floatval($people) * floatval($pieces); // 10 * 2 = 20 

	$totalBoxes = floatval($totalPieces) / floatval($pizza); //20 / 6 = 3.33 = 4 

	$rounded = ceil($totalBoxes);

	$totalPizza = floatval($rounded) * floatval($pizza) ; // 4 * 6 = 24

	$totalLeftover = floatval($totalPizza) - floatval($totalPieces) ; // 12 - 12 

	$positive = abs($totalLeftover);

	
	echo "<p>There are $people people and each person will have $pieces pieces</p>";
	echo "<p>Each box will have $pizza pieces of pizza</p>";
	echo "<p>You will need $rounded box of pizza</p>";
	echo "<p>There are $positive pieces of pizza left</p>"; 

	}
	

?>




<form method="POST">
<!-- 	<h1>Pizza Party</h1> -->

	<div class='field'> 
		<label>How many people?</label>
		<input type="text" name="people" value="<?=$people?>">
	</div>

	<div class='field'>
		<label>How many pieces of pizza will each person have?</label>
		<input type="text" name="pieces" value="<?=$pieces?>"> 
	</div>

	<div class="buttons"> 
		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		   <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	 </div>
</form>
