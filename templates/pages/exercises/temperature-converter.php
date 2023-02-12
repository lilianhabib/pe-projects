

  <?php 


    $celsius = ""; 
    $fahrenheit = ""; 
    $temperature = "";

    if (isset($_POST["celsius"]) ){

      if (isset($_POST["temperature"]) ){
        $temperature = $_POST["temperature"];

      }
      if (isset($_POST["clear"]) ){
          $_POST = array();
      }

    } 

     $celsius = round((floatval($temperature) - 32) * (5/9)); 

     if (isset($_POST["fahrenheit"]) ){

      if (isset($_POST["temperature"]) ){
        $temperature = $_POST["temperature"];
      }
      if (isset($_POST["clear"]) ){
          $_POST = array();
      }

      $fahrenheit = $temperature;

  

      echo "<p>The temperature in Celsius is $celsius</p>";
      echo "<p>The temperature in Fahrenheit is $fahrenheit</p>";
    } 


    
  ?>


  <form method="POST">

    <div class="field"> 
    
      <label>Please enter the temperature in Fahrenheit:</label>
      <input type="text" name="temperature" value="<?=$temperature?>">

    </div>

    <button type="submit" name="celsius" value="<?=$celsius?>">Celsius</button>

    <button type="submit" name="fahrenheit" value="<?=$fahrenheit?>">Fahrenheit</button>
    <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

  </form>










