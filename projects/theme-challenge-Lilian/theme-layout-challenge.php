<!doctype HTML> 
<head> 

    <meta charset="utf-8">
    <meta name="author" content="Lilian Habib">
    <meta name="description" content="A website documenting Lilian's journey in becoming a web developer. This is where she will archive all her wonderful creative designs.">

    <meta name="viewport" content="width=device-width,initial-scale=1">
  

    <meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/sharelilian.png">
    

    <link rel="shortcut icon" href="../../images/lilian1.png" type="image/png">

    <link rel="stylesheet" href='styles.css'> 
    
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


    <?php
      $logo = "LOGO"; 
      $somePage = "Some Page"; 
      $masthead = "Masthead"; 

      $mainNavs = [$logo, $somePage, $masthead]; 

      //make sign-in echo sign-in or make it as nav2 // 

?>

  </head>





  
  <body> 
    <header> 
      <section class='header-nav'>

          <inner-column>

            <masthead>

              <nav>

                <div class='main-nav'>

                  <?php foreach($mainNavs as $mainNav){ ?>
                  <a href='#'><?=$mainNav?></a>
                  <?php } ?>
                  
                </div>
              
                <div class='signin'> 
                  <?php $signIn = "Sign-In";?>
                  <a href='#'><?=$signIn?></a>
                </div>

              </nav>
              

            </masthead>

          </inner-column>

        </section>

      </header>

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
            <?php include ('action.php');?>
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
              <?php include ('article.php');?>
            </article-grid>

          </div>

        </inner-column>

      </section>


      <section class='action-container'>

        <inner-column>

          <div class="action-content">
              <?php include ('action.php');?>
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

        </inner-column>

      </section>
      
    </footer> 

  </body>

</html> 
















