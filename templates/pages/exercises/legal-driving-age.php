
  <?php 

    $age = "";
    $message = ""; 

    if(isset($_POST["submitted"]) ){


      if (isset($_POST["age"]) ){
        $age = $_POST["age"]; 
      }

      if (isset($_POST["clear"]) ){
        $_POST = array();
      }

    }

    if ($age >= 16) {
      $message = "You are old enough to legally drive";  
    } else if ($age == "") {
      $message = ""; 
    } else if ($age <= 16) {
      $message = "You are NOT old enough to legally drive"; 
    }


  ?>



  <form method="POST">

    <div class="field">
      <label>What is your age?</label>
      <input type="text" name="age" value="<?=$age?>"> 
    </div>
    <div class='buttons'> 
      <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
      <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
    </div>
    <br> 
    <?=$message?>

  </form>