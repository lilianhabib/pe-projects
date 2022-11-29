<?php include('utilities.php'); ?>





<header>
	<p><?=queryString();?></p>
	<h1>PAGE TITLE <?=currentPage()?></h1>
	<p>PAGE INFO</p>

	<?php include('partials/site-menu.php')?>

</header>

<?php getPageTemplate(currentPage())?>
