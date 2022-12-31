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

  $length = " "; 
  $width = " "; 
  $oneGallon = 350; 
  $gallonAmount = ""; 
  $sqftAmount = ""; 

  if (isset ($_POST["submitted"]) ){

    if (isset($_POST["length"]) ) {
      $length = $_POST["length"];
    }

    if (isset ($_POST["width"]) ){
      $width = $_POST["width"]; 
    }
  }

  $sqftAmount = floatval($length) * floatval($width);

  $gallonAmount = floatval($sqftAmount) / floatval($oneGallon);

  $gallonAmountRounded = ceil($gallonAmount);


  $message = "You will need to purchase $gallonAmountRounded of paint to cover $sqftAmount square feet."



?>

<form method="POST">

  <h1>Paint Calculator</h1>

  <div class="field"> 
    <label>What is the length of the room in square feet?</label>
    <input type="text" name="length" value="<?=$length?>">
  </div>

  <div class="field"> 
    <label>What is the width of the room in square feet</label>
    <input type="text" name="width" value="<?=$width?>">
  </div>

  <button type="submit" name="submitted">Submit</button>

</form>

<p><?=$message?></p>