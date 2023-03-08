<?php 

function tripple($number) {
  $calculate = $number * 3;
  return $number . " is equal to " . $calculate; 
}

function isDerek($name) {
  if ($name === "derek") {
    return "true. " . $name . " is a Derek";
  } else if ($name === "Derek") {
    return "true. " . $name . " is a Derek"; 
  } else {
    return "false. ". $name . " is not a Derek";
  }
}

function doMath($num1, $num2, $type) {
  if ($type === 'add') {
    $add = $num1 + $num2;
    return $add . ", " . "$num1 + $num2 = $add";
  } else if ($type === 'subtract') {
    $subtract = $num1 - $num2;
    return $subtract . ", " . "$num1 - $num2 = $subtract" ; 
  } else if ($type === 'multiply') {
    $multiply = $num1 * $num2; 
    return $multiply . ", " . "$num1 * $num2 = $multiply";
  } else if ($type === 'divide') {
    $divide = $num1 / $num2;
    return $divide . ", " . "$num1 / $num2 = $divide";
  }
}


function double($aNumber = NULL) {
  if (is_string($aNumber)) { //or (gettype($aNumber) == "integer") 
    return "You must input an integer";
  } else if ($aNumber === null) {
      return "You haven't supplied a value.";
  } else if (func_num_args() != 1) {
      return "You may only supply one value.";
  } else if ($aNumber == 0 ) {
      $zero = $aNumber * 2; 
      return $zero . ", " . "Double with zero is zero" ;
  } else if ($aNumber < 0 ) {
      $negative = $aNumber * 2; 
      return $negative . ", " . "Double with negative number"; 
  } else if ($aNumber > 0) {
      $positive = $aNumber * 2;
      return $positive . ", " . "Double with positive number" ;
  } 
}
?>


<!DOCTYPE html>
<html>
<head>
  
</head>

  <body>
 
    <main> 

      <p><?php echo tripple(3); ?></p>
      <p><?php echo tripple(10); ?></p>

      <p><?php echo isDerek('derek'); ?></p>
      <p><?php echo isDerek('Derek'); ?></p>
      <p><?php echo isDerek('Ivy'); ?></p>

      <p><?php echo doMath(2, 2, "add"); ?></p>
      <p><?php echo doMath(8, 6, "subtract"); ?></p>
      <p><?php echo doMath(2, 4, "multiply"); ?></p>
      <p><?php echo doMath(12, 3, "divide"); ?></p>

      <p><?php echo double(4);?></p>
      <p><?php echo double(0);?></p>
      <p><?php echo double(-4);?></p>
      <p><?php echo double("hi");?></p>
      <p><?php echo double();?></p>
      <p><?php echo double(1, 2);?></p>

    </main>


  </body>

    
</html>

