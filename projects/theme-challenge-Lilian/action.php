<!-- <?php 

	$actionInfo = [
		"image" => "img src='images/welcome.jpg'",
        "header" =>"This module is a 'call to action'", 
        "info" => "These aren't names you should memorize. We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern.", 
        "actionButton" => "<a href='#'>here's the action!</a>"

    ]; 



   	$actions = [$actionInfo]; 



    foreach ($actions as $action) {
      $header = $action["header"];
      $info = $action["info"]; 
      $button = $action["actionButton"];

    echo 
      "<action-info>" . 
        "<h2>" . $header . "</h3>" . 
        "<p>" . $info . "</p>" . 
        "<button>" . $button . "</button>". 
      "</action-info>"; 
    }

?> -->


<?php 

	$product1 = [
		"image" => "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/welcome.jpg",
        "header" =>"This is the shy voice", 
        "info" => "This is the noisy voice", 
        "actionButton" => "<a href='#'>Add to Cart</a>"

    ]; 

    $product2 = [
    	"image" => "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/welcome.jpg", 
    	"header" => "This is the shy voice", 
    	"info" => "This is the noisy voice", 
    	"actionButton" => "<a href='#'>Add to Cart</a>"
    ]; 

    $product3 = [
    	"image" => "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/welcome.jpg", 
    	"header" => "This is the shy voice", 
    	"info" => "This is the noisy voice", 
    	"actionButton" => "<a href='#'>Add to Card</a>", 
    ]; 

     $product4 = [
    	"image" => "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/welcome.jpg", 
    	"header" => "This is the shy voice", 
    	"info" => "This is the noisy voice", 
    	"actionButton" => "<a href='#'>Add to Card</a>", 
    ]; 


   	$actions = [$product1, $product2, $product3, $product4]; 



    foreach ($actions as $product) {
      $header = $product["header"];
      $info = $product["info"]; 
      $button = $product["actionButton"];

    echo 
      "<product-info>" . 
        "<h2>" . $header . "</h3>" . 
        "<p>" . $info . "</p>" . 
        "<button>" . $button . "</button>". 
      "</product-info>";  
    }

?>