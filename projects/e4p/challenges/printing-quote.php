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

	$quote = " "; 
	$author = "";


	if (isset($_POST["submitted"])){

		if (isset($_POST["quote"]) ){
			$quote = $_POST["quote"];
		}


		if (isset($_POST["author"])){
			$author = $_POST["author"];
		}
	}

// method 1
	echo "<p>What is the quote? '$quote.'</p>"; 

	echo "<p>Who wrote it? $author</p>"; 

	echo "<p>$author says, '$quote'</p>";

// method 2
	$message1 = "<p>What is the quote? $quote.</p>";
	$message2 = "<p>Who wrote it? $author.</p>";
	$message3 ="<p>$author says, '$quote.'</p>"; 

// method 3
	echo $message1;
	echo $message2;
	echo $message3;
	
?>

<form method="POST">
	<h1>Printing Quotes</h1>

	<div class='field'> 
		<label>What is the quote?</label>
		<input type="text" name="quote" value="<?=$quote?>">
	</div>

	<div class='field'>
		<label>Who said it?</label>
		<input type="text" name="author" value="<?=$author?>">  
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>

<!-- method 2 -->
<p><?=$message1?></p>
<p><?=$message2?></p>
<p><?=$message3?></p>


