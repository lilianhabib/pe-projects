<?php include ("templates/partials/header.php");?> 


<?php if (isset($pageData["sections"] ) ) { ?>
	<?php foreach ($pageData["sections"] as $section) { ?> 
		<?php include ("templates/modules/$section[module]/template.php"); ?>
	<?php } ?>   

<?php } ?>

