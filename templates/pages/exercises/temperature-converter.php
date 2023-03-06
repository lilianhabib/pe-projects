

  <?php 


    $celsiusTemp = ""; 
    $temperature = "";
    $celsiusMessage = "";


    if (isset($_POST["celsius"]) ){

      if (isset($_POST["temperature"]) ){
        $temperature = $_POST["temperature"];

      }
      if (isset($_POST["clear"]) ){
          $_POST = array();
      }
    } 

    if ($temperature != "") {
        $celsiusTemp = round((floatval($temperature) - 32) * (5/9)); 
        $celsiusMessage = "<p>The temperature in Celsius is $celsiusTemp.</p>";

      } else if ($temperature == "") {
        $celsiusMessage = "";
      }

    
  ?>


  <form method="POST">

    <div class="field"> 
    
      <label>Please enter the temperature in Fahrenheit:</label>
      <input type="text" name="temperature" value="<?=$temperature?>">

    </div>

    <div class='buttons'>
      <button type="submit" name="celsius" value="<?=$celsius?>">Celsius</button>

      <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
    </div>
    <br>

    <?=$celsiusMessage?>

  </form>










