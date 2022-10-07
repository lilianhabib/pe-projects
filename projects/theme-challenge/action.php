<?php 

	$actionInfo = [
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

?>