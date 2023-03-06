

<?php 

  $principleAmount = 0; 
  $rate = 0; 
  $years = 0; 
  $amountAccrued = ""; 
  $message = "";

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

      if ($principleAmount && $rate && $years != 0 ) {
        $message = "After $years at $rate%, the investment will be worth $$amountAccrued.";
      } else {
        $message = "";
      }
      
  
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

  <div class='buttons'> 
    <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
    <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
  </div>
   <br>
   <?=$message?>
</form>

