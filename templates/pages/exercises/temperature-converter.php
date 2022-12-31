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


    $celsius = ""; 
    $fahrenheit = ""; 
    $temperature = "";

    if (isset($_POST["celsius"]) ){

      if (isset($_POST["temperature"]) ){
        $temperature = $_POST["temperature"];

      }
    } 

     $celsius = round((floatval($temperature) - 32) * (5/9)); 

     if (isset($_POST["fahrenheit"]) ){

      if (isset($_POST["temperature"]) ){
        $temperature = $_POST["temperature"];

      }
    } 


    $fahrenheit = $temperature;

  

    echo "<p>The temperature in Celsius is $celsius</p>";
    echo "<p>The temperature in Fahrenheit is $fahrenheit</p>";
  ?>


  <form method="POST">

    <h1>Temperature Converter</h1>

    <div class="field"> 
    
      <label>Please enter the temperature in Fahrenheit:</label>
      <input type="text" name="temperature" value="<?=$temperature?>">

    </div>

    <button type="submit" name="celsius" value="<?=$celsius?>">Celsius</button>

    <button type="submit" name="fahrenheit" value="<?=$fahrenheit?>">Fahrenheit</button>

  </form>










