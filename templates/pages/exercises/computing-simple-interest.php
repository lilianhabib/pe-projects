
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

  $principleAmount = "1500"; 
  $rate = "5.4"; 
  $years = "5"; 
  $amountAccrued = ""; 

  if (isset($_POST["submitted"]) ){

    if(isset($_POST["principleAmount"]) ){
      $principleAmount = $_POST["principleAmount"];
    }

    if (isset($_POST["rate"]) ){
      $rate = $_POST["rate"]; 
    }

    if (isset($_POST["years"]) ){
      $years = $_POST["years"]; 
    }
  }

  $amountAccrued = floatval($principleAmount) * (1 + floatval($rate) * floatval($years)); 

  $message = "After $years at $rate%, the investment will be worth $$amountAccrued. "

?>


<form method="POST">

  <h1>Computing Simple Interest</h1>

  <div class="field">
    <label>What is the principle amount</label>
    <input type='text' name="principleAmount" value="<?=$principleAmount?>">
  </div>

  <div class="field">
    <label>What is the rate</label>
    <input type="text" name="rate" value="<?=$rate?>">
  </div>

  <div class="field">
    <label>Enter the number of years</label>
    <input type="text" name="years" value="<?=$years?>">
  </div>

  <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>

</form>

<p><?=$message?></p>
