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

	$noun = "";
	$adjective = "";
	$adverb = "";
	$verb = "";
	
	if (isset($_POST["submitted"])){

		if (isset($_POST["noun"])){
			$noun = $_POST["noun"];
		}

		if (isset($_POST["verb"])){
			$verb = $_POST["verb"];
		}

		if (isset ($_POST["adjective"])){
			$adjective = $_POST["adjective"]; 
		}

		if (isset ($_POST["adverb"])){
			$adverb = $_POST["adverb"]; 
		}
		
		if (isset($_POST["clear"]) ){
      $_POST = array();
    }


	$message4 = "<p>Do you $verb your $adjective $noun $adverb? That's hilarious.</p>";
	echo $message4;
	
	}


	

?>

<form method="POST">
<!-- 	<h1>Mad Libs</h1> -->

	<div class='field'>
		<label>Enter a noun</label>
		<input type="text" name="noun" value="<?=$noun?>">  
	</div>


	<div class="field">
		<label>Enter a verb</label>
		<input type="text" name="verb" value="<?=$verb?>">  
	</div>

	<div class="field">
		<label>Enter an adjective</label>
		<input type="text" name="adjective" value="<?=$adjective?>">  
	</div>

	<div class="field">
		<label>Enter an adverb</label>
		<input type="text" name="adverb" value="<?=$adverb?>">  
	</div>

	<div class="buttons"> 
		<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
		   <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
	 </div>

</form>

