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

  $month = ""; 
  $number = ""; 
    

  if (isset($_POST["submitted"]) ){

    if (isset($_POST["month"]) ){
      $month = $_POST["month"]; 
    }

    if (isset($_POST["clear"]) ){
      $_POST = array();
    }


  }


  switch($month) {
    case "1":
      echo "January"; 
      break;

    case "2"; 
      echo "February"; 
      break;

    case "3"; 
      echo "March"; 
      break;

    case "4"; 
      echo "April"; 
      break;

    case "5"; 
      echo "May"; 
      break;

    case "6"; 
      echo "June"; 
      break;

    case "7"; 
      echo "July";
      break; 

    case "8"; 
      echo "August"; 
      break;

    case "9"; 
      echo "September"; 
      break;

    case "10"; 
      echo "October"; 
      break;

    case "11"; 
      echo "November"; 
      break;

    case "12"; 
      echo "December"; 
    
  }

  
    
  ?>


  <form method="POST">

  <!--   <h1>Numbers to Name</h1> -->

    <div class="field"> 
    
      <label>Please enter the number of the month:</label>
      <input type="text" name="month" value="<?=$month?>">

    </div>

    <div class="buttons"> 
      <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
      <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
    </div>
    

  </form>
