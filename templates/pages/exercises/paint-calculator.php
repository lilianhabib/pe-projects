 


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

    if (isset($_POST["clear"]) ){
      $_POST = array();
    }

    $sqftAmount = floatval($length) * floatval($width);

    $gallonAmount = floatval($sqftAmount) / floatval($oneGallon);

    $gallonAmountRounded = ceil($gallonAmount);


    $message = "You will need to purchase $gallonAmountRounded of paint to cover $sqftAmount square feet.";

    echo $message;

  }


?>

<form method="POST">

  <div class="field"> 
    <label>What is the length of the room in square feet?</label>
    <input type="text" name="length" value="<?=$length?>">
  </div>

  <div class="field"> 
    <label>What is the width of the room in square feet</label>
    <input type="text" name="width" value="<?=$width?>">
  </div>

  <button type="submit" name="submitted">Submit</button>
  <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

</form>
