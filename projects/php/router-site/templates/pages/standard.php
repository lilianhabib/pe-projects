<!-- This page is a little hub that is deciding what info to pull from the json data -->

<?php include ('page-header.php');?>

	
<?php foreach ($pageData["sections"] as $section) { ?>

	<?php include ("templates/modules/$section[module]/templates.php"); ?>
<?php } ?>
		


