

  <?php 

  $month = ""; 
  $number = ""; 
  $message = "";
    

  if (isset($_POST["submitted"]) ){

    if (isset($_POST["month"]) ){
      $month = $_POST["month"]; 
    }

    if (isset($_POST["clear"]) ){
      $_POST = array();
    }

    switch($month) {
      case "1":
        $message = "January"; 
        break;

      case "2"; 
        $message = "February"; 
        break;

      case "3"; 
        $message = "March"; 
        break;

      case "4"; 
        $message = "April"; 
        break;

      case "5"; 
        $message = "May"; 
        break;

      case "6"; 
        $message = "June"; 
        break;

      case "7"; 
        $message = "July";
        break; 

      case "8"; 
        $message = "August"; 
        break;

      case "9"; 
        $message = "September"; 
        break;

      case "10"; 
        $message = "October"; 
        break;

      case "11"; 
        $message = "November"; 
        break;

      case "12"; 
        $message = "December"; 
        break;

      default: 
        $message = "Please try again"; 
    }

  }

    
  ?>


  <form method="POST">


    <div class="field"> 
    
      <label>Please enter the number of the month:</label>
      <input type="text" name="month" value="<?=$month?>">

    </div>
    <div class='buttons'> 
      <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>

      <button type="submit" name="clear" value="<?=$clear?>">Clear</button>
    </div>
    <br>
    <?=$message?>
    

  </form>
