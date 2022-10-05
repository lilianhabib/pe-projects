<head> 

    <meta charset="utf-8">
    <meta name="author" content="Lilian Habib">
    <meta name="description" content="A website documenting Lilian's journey in becoming a web developer. This is where she will archive all her wonderful creative designs.">

    <meta name="viewport" content="width=device-width,initial-scale=1">
  

    <meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/sharelilian.png">
    

    <link rel="shortcut icon" href="../../images/lilian1.png" type="image/png">

    <!-- <link rel="stylesheet" href='styles.css'>  -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=BhuTuka+Expanded+One&family=Patrick+Hand&family=Podkova&family=Square+Peg&display=swap" rel="stylesheet">

  
    <!-- Facebook Meta Tags -->
      <meta property="og:url" content="https://peprojects.dev/alpha-5/lilian/">
      <meta property="og:type" content="website">
      <meta property="og:title" content=" index ">
      <meta property="og:description" content="A website containing all of Lilian's awesome websites created while in Perpetual Education - Design for the Web.">
      <meta property="og:image" content="https://peprojects.devimages/metalilian.png?hello">

      <!-- Twitter Meta Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta property="twitter:domain" content="peprojects.dev">
      <meta property="twitter:url" content="https://peprojects.dev/alpha-5/lilian">
      <meta name="twitter:title" content=" index ">
      <meta name="twitter:description" content="A website containing all of Lilian's awesome websites created while in Perpetual Education - Design for the Web.">
      <meta name="twitter:image" content="https://peprojects.devimages/metalilian.png">


    <title>Lilian's Thing-A-Day</title>

    <style> 

      * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0 auto;
        font-family: sans-serif;
      }
      inner-column,
      picture,
      img,
      welcome-text,
      sign-in,
      button,
      article-info,
      masthead,
      footer-info,
      main-nav,
      action-info,
      article-info,
      article-grid {
        display: block;
      }

      inner-column {
/*        border: 2px solid black;*/
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        overflow: hidden;
      }

      picture {
        max-width: 70%;
      }

      img {
        width: 100%;
        height: auto;
      }

      .header-nav {
        background-color: lightgreen;
      }
/*
      .header-nav inner-column {
        border: 2px solid blue;
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
      }*/

      main-nav {
        padding: 10px;
/*        border: 2px solid black;*/
        display: flex;
        flex-direction: row;
        justify-content: start;
        align-items: start;
        flex-wrap: wrap;
      }

      main-nav a {
/*        border: 2px solid black;*/
        padding: 10px;
      }

      sign-in {
/*        border: 2px solid black;*/
        padding: 10px;
        display: flex;
        flex-direction: row;
        justify-content: start;
        align-items: start;
        flex-wrap: wrap;
      }

      sign-in a {
/*        border: 2px solid black;*/
        padding: 10px;
      }

      /* WELCOME */
      .welcome-container {
        background-color: lightblue;
      }

      .welcome-content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .welcome-info {
    /*    border: 2px solid black;*/
        max-width: 70%;
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
      }

      picture {
/*        border: 2px solid black;*/
        padding: 10px;
      }

      img {
/*        border: 2px solid black;*/
        padding: 10px;
      }

      h1 {
/*        border: 2px solid black;*/
        font-size: 40px;
        text-align: center;
        max-width: 375px;
      }

      p {
       /* border: 2px solid black;*/
        font-size: 15px;
      }

      /* ACTION */

      .action-container {
        background-color: lightpink;
        gap: 10px;
      }
      .action-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        padding-top: 100px;
        padding-bottom: 100px;
      }

      action-info {
 /*       border: 2px solid blue;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        gap: 10px;
      }

      h2 {
 /*       border: 2px solid black;*/
        font-size: 25px;
        text-align: left;
      }

      button {
        background-color: black;
        border: none;
        font-size: 15px;
        font-weight: bold;
        padding: 10px;
      }

      button a {
        color: white;
        text-transform: uppercase;
      }

      /* ARTICLE  */
      .article-container {
        background-color: orange;
        padding-top: 100px;
        padding-bottom: 100px;
      }

      .article-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        gap: 20px;
        padding-top: 30px;
        padding-bottom: 30px;
      }

      article-info {
        border: 2px solid black;
        padding: 10px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        gap: 20px;
  
      }

      .articleHeader {
        max-width: 100%;
 /*       border: 2px solid black;*/
        font-size: 20px;
        padding: 10px;
      }

      article p {
        max-width: 100%;
      }

      article-grid {
    /*    border: 2px solid black;*/
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: 20px;
        padding: 10px;
      }

      .articleDes {
  /*      border: 2px solid black;*/
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: 20px;
        padding: 10px;
      }




      /* FOOTER */
      .footer-container {
        background-color: lightgrey;
      }

      .footer-container h3 {
        font-size: 25px;
      }

      .footer-container p {
        font-size: 15px;
        width: 100%;
      }

      footer-info {
 /*       border: 2px solid black;*/
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: stretch;
        align-items: start;
        gap: 20px;
      }

      .footer-links {
        padding-top: 30px;
        padding-bottom: 30px;
        display: grid;
        grid-template-columns: 180px 150px;
        grid-template-rows: 150px fr;
        grid-gap: 20px;
        justify-content: center;
      }

      .page-links {
    /*    border: 2px solid black;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        padding: 10px;
      }

      .page-links a {
        /*border: 2px solid black;*/
        padding: 10px;
        width: 100%;
      }

      .signin-link {
/*        border: 2px solid black;*/
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
      }
      .signin-link a {
/*        border: 2px solid black;*/
        padding: 10px;
      }

      .legal-links {
 /*       border: 2px solid black;*/
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
      }

      .legal-links a {
  /*      border: 2px solid black;*/
        padding: 10px;
      }

      .social-links {
/*        border: 2px solid black;*/
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
      }

      .social-links a {
      /*  border: 2px solid black;*/
        padding: 10px;
      }

      /* MEDIA */
      @media (min-width: 600px) {
        inner-column {
          max-width: 600px;
        }

     /*   .header-nav inner-column {
          flex-direction: row;
          justify-content: space-between; /*not working */
        

        .welcome-content {
          flex-direction: row-reverse;
        }

        picture {
          max-width: 50%;
        }

        action-info {
      /*    border: 2px solid black;*/
          padding: 10px;
          max-width: 60%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: start;
        }

        h2 {
          max-width: 100%;
        }

        .action-container p {
          max-width: 100%;
        }

        article-info {
          min-height: 275px;
        }
        article-grid {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
          grid-gap: 20px;
        }

        .footer-links {
     /*     border: 2px solid black;*/
          display: flex;
          flex-direction: row;
          justify-content: start;
          align-items: start;
        }
      }

      @media (min-width: 700px) {
        inner-column {
          max-width: 700px;
        }

        .footer-links {
          justify-content: space-around;
        }
      }

    </style>


    <?php  

    // MENU
      $logo = "LOGO"; 
      $somePage = "Some Page"; 
      $masthead = "Masthead"; 
      $signIn = "Sign-In"; 

      $mainNavs = [$logo, $somePage, $masthead, $signIn]; 

      // ACTION

       $actionInfo = [
        "header" =>"This module is a 'call to action'", 
        "info" => "These aren't names you should memorize. We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern.", 
        "actionButton" => "<a href='#'>here's the action!</a>"

      ]; 

      $actions = [$actionInfo]; 


      // ARTICLE

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

        $allArticle = [$article1, $article2, $article3, $article4, $article5, $article6];


    ?>

  <head> 


  
  <header>

    <section class='header-nav'>

        <inner-column>

          <masthead>

            <main-nav>

              <?php foreach($mainNavs as $mainNav){ ?>
                <a href='#'><?=$mainNav?></a>
              <?php } ?>

            </main-nav>

          </masthead>

        </inner-column>

      </section>

    </header>


    <main> 
      <section class='welcome-container'>

        <inner-column>

          <div class="welcome-content">

            <picture>
              <img src="https://peprojects.dev/images/square.jpg">
            </picture>

            <div class="welcome-info">
              <h1>Hello! This is a 'diptych'</h1>
              <p>You can call it whatever you want. It's a module that has an image and some supporting text. On the smaller screen it works nicely to stack. On a larger screen, it fits side by side.</p>
            </div>

          </div>

        </inner-column>

      </section>

      
      <section class='action-container'>

        <inner-column>

          <div class="action-content">
              <?php 
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
          </div>

        </inner-column>

      </section>


    <section class='article-container'>
      
      <inner-column>

        <div class="article-content"> 

          <article>
            <h3>This is an "Article grid" module. This is its heading</h3>
            <p>Again, we totally just made that up. It's a box with boxes in it.</p>
          </article>

          <article-grid>

           <?php

              foreach ($allArticle as $article) {
                $header = $article["header"]; 
                $description = $article["description"]; 
                $button = $article["button"]; 

                echo 
                  "<article-info>" .

                    "<h3 class='articleHeader'>" . $header . "</h3>" . 

                    "<p class='articleDes'>" . $description . "</p>" . 

                    "<button class='articleButton'>" . $button . "</button>" . 

                  "</article-info>"; 
              }
             ?>

          </article-grid>

        </div>
      </inner-column>
    </section>

    <section class='action-container'>

      <inner-column>

        <div class="action-content">
            <?php 
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
        </div>

      </inner-column>

    </section>

  </main>



  <footer>
    <section class='footer-container'>

      <inner-column>

        <div class="footer-content"> 
          <footer-info>
            <h3>This is the site footer and it has a "site-map" module in it</h3>
            <p>Pretty standard type thing, right?</p>
          </footer-info>

          <div class="footer-links">

            <div class="page-links">
              <a href="#">LOGO</a>
              <a href="#">Some page</a>
              <a href="#">Some other page</a>
            </div>

            <div class="signin-link">
              <a href="#">Sign-in</a>
            </div>

            <div class="legal-links">
              <a href="#">Legal thing a</a>
              <a href="#">Legal thing b</a>
            </div>

            <div class="social-links">
              <a href="#">social thing a</a>
              <a href="#">social thing b</a>
              <a href="#">social thing c</a>
              <a href="#">social thing d</a>
            </div>
          
          </div>

        </div>

      </inner-column>

    </section>
</footer> 

















