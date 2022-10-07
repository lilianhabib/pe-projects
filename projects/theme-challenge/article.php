 <?php


  $article1 = [
      "header" => "This is an article card", 
      "description" => "It's basically a mini call to action, right?.",
      "button" => "<a href='#'>act!</a>", 
    ]; 

    $article2 = [
      "header" => "This is the title of an article", 
      "description" => "Here's a little info to help you understand if this is an article you want to read.",
      "button" => "<a href='#'>read more</a>", 
    ]; 

    $article3 = [
      "header" => "This is the title of an article!", 
      "description" => "Here's a little info to help you understand if this is an article you want to read.",
      "button" => "<a href='#'>read more</a>", 
    ]; 

    $article4 = [
      "header" => "This is the title of an article", 
      "description" => "Here's a little info to help you understand if this is an article you want to read.",
      "button" => "<a href='#'>read more</a>", 
    ];

    $article5 = [
      "header" => "This is the title of an article", 
      "description" => "Here's a little info to help you understand if this is an article you want to read.",
      "button" => "<a href='#'>read more</a>", 
    ];

    $article6 = [
      "header" => "This is the title of an article", 
      "description" => "Here's a little info to help you understand if this is an article you want to read.",
      "button" => "<a href='#'>read more</a>", 
    ];

    $articles = [$article1, $article2, $article3, $article4, $article5, $article6];

    foreach ($articles as $article) {

      echo 
        "<article-info>" .

          "<h3 class='articleHeader'>" . $article["header"] . "</h3>" . 

          "<p class='articleDes'>" . $article["description"] . "</p>" . 

          "<button class='articleButton'>" . $article["button"] . "</button>" . 

        "</article-info>"; 
    };
   ?>