
<articles-intro>

  <header>
    <h2 class='attention-voice'>Learn more about your skin</h2>

    <p class='caption-voice'>Read our articles to learn more about skin beauty secrets</p>
  </header>

  <article-grid>
    <?php include('articles_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($database as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
