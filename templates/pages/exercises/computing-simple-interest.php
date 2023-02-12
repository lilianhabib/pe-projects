

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

    if (isset($_POST["clear"]) ){
      $_POST = array();
    }

      $amountAccrued = floatval($principleAmount) * (1 + floatval($rate) * floatval($years)); 

      $message = "After $years at $rate%, the investment will be worth $$amountAccrued.";

      echo $message; 
  }

?>


<form method="POST">

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

   <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

</form>

