

  <?php 

    $username = ""; 
    $password = "abc$123"; 
    $userInputPassword = ""; 

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
        echo "Welcome!";
      } else if ($userInputPassword === ""){
        echo ""; 
      } else {
        echo "I don't know you"; 
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
      <input type="password" name="userInputPassword" value="<?=$userInputPassword?>">
    </div>

    <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>
    <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

  </form>


















