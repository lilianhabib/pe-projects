
  <?php 

    $age = ""; 

    if(isset($_POST["submitted"]) ){


      if (isset($_POST["age"]) ){
        $age = $_POST["age"]; 
      }

      if (isset($_POST["clear"]) ){
        $_POST = array();
      }

    }




  ?>



  <form method="POST">

    <div class="field">
      <label>What is your age?</label>
      <input type="text" name="age" value="<?=$age?>"> 
    </div>

    <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
    <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
    <br> 
    <br> 
    <?php
      if ($age >= 16) {
        echo "You are old enough to legally drive";  
      } else {
        echo "You are NOT old enough to legally drive"; 
      } 
    ?>

  </form>