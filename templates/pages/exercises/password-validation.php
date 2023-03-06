

  <?php 

    $username = ""; 
    $password = "abc$123"; 
    $userInputPassword = ""; 
    $message = "";

    if (isset($_POST["submitted"]) ){



      if (isset($_POST["username"]) ){
        $username = $_POST["username"]; 
      }

      if (isset($_POST["userInputPassword"]) ){
        $userInputPassword = $_POST["userInputPassword"];
  
      }

      if (isset($_POST["clear"]) ){
        $_POST = array();
      }


      if ($userInputPassword === $password){
        $message = "Welcome!";
      } else if ($userInputPassword === ""){
        $message = ""; 
      } else {
        $message = "I don't know you"; 
      }
  }


  ?>


  <form method="POST">

    <div class="field"> 
      <label>What is the username?</label>
      <input type="text" name="username" value="<?=$username?>"> 
    </div>

    <div class="field">
      <label>What is the password?</label>
      <input type="password" name="userInputPassword" value="<?=$userInputPassword?>" placeholder='abc$123'>
    </div>

    <div class='buttons'>
      <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
      <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
    </div>
    <br> 
    <?=$message?>
  </form>


















