

  <?php 

  $month = ""; 
  $number = ""; 
    

  if (isset($_POST["submitted"]) ){

    if (isset($_POST["month"]) ){
      $month = $_POST["month"]; 
    }

    if (isset($_POST["clear"]) ){
      $_POST = array();
    }

    switch($month) {
      case "1":
        echo "January"; 
        break;

      case "2"; 
        echo "February"; 
        break;

      case "3"; 
        echo "March"; 
        break;

      case "4"; 
        echo "April"; 
        break;

      case "5"; 
        echo "May"; 
        break;

      case "6"; 
        echo "June"; 
        break;

      case "7"; 
        echo "July";
        break; 

      case "8"; 
        echo "August"; 
        break;

      case "9"; 
        echo "September"; 
        break;

      case "10"; 
        echo "October"; 
        break;

      case "11"; 
        echo "November"; 
        break;

      case "12"; 
        echo "December"; 
        break;

      default: 
        echo "Please try again"; 
    }

  }

    
  ?>


  <form method="POST">


    <div class="field"> 
    
      <label>Please enter the number of the month:</label>
      <input type="text" name="month" value="<?=$month?>">

    </div>

    <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>

    <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

    

  </form>
