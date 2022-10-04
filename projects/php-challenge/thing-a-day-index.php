<head> 

		<meta charset="utf-8">
		<meta name="author" content="Lilian Habib">
		<meta name="description" content="A website documenting Lilian's journey in becoming a web developer. This is where she will archive all her wonderful creative designs.">

		<meta name="viewport" content="width=device-width,initial-scale=1">
	

		<meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/sharelilian.png">
		

		<link rel="shortcut icon" href="../../images/lilian1.png" type="image/png">

		<link rel="stylesheet" href='styles.css'> 
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=BhuTuka+Expanded+One&family=Patrick+Hand&family=Podkova&family=Square+Peg&display=swap" rel="stylesheet">

	
		<!-- Facebook Meta Tags -->
		  <meta property="og:url" content="https://peprojects.dev/alpha-5/lilian/">
		  <meta property="og:type" content="website">
		  <meta property="og:title" content=" index ">
		  <meta property="og:description" content="A website containing all of Lilian's awesome websites created while in Perpetual Education - Design for the Web.">
		  <meta property="og:image" content="https://peprojects.devimages/metalilian.png?hello">

		  <!-- Twitter Meta Tags -->
		  <meta name="twitter:card" content="summary_large_image">
		  <meta property="twitter:domain" content="peprojects.dev">
		  <meta property="twitter:url" content="https://peprojects.dev/alpha-5/lilian">
		  <meta name="twitter:title" content=" index ">
		  <meta name="twitter:description" content="A website containing all of Lilian's awesome websites created while in Perpetual Education - Design for the Web.">
		  <meta name="twitter:image" content="https://peprojects.devimages/metalilian.png">


		<title>Lilian's Thing-A-Day</title>



	<head> 

<?php 
	echo "<h1>A Thing-A-Day</h1>";
	echo "<p>Pick something. Anything. Create some constraints. Then do it for a set amount of days.</p>";

	$dayOne = "<img src='images/m-day1.jpg' alt='the letter m repeated in the color red'>";

	$dayTwo = "<img src='images/m-day2.jpg' alt='the letter m'>";

	$designs = [$dayOne, $dayTwo]; 

	foreach ($designs as $design){
		echo "<li>$design</li>";
	} 
?>