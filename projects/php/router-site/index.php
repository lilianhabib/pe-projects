<?php include('utilities.php'); ?>





<header>
	<p><?=queryString();?></p>
	<h1><?=$page["title"]?></h1>
	<p><?=$page["intro"]?></p>

	<?php include('partials/site-menu.php')?>

</header>

<?php getPageTemplate(currentPage())?>

<section>
	<h2>SECTION HEADING</h2>
</section>