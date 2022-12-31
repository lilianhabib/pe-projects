<?php 

	$json = file_get_contents("data/responsive-layout-data.json"); 

	$layouts = json_decode($json, true); 
?>

<section class=''>
	<inner-column> 

		<layout-list>

				<?php foreach ($layouts as $layout) { ?>
					<img src="https://www.peprojects.dev/images/landscape.jpg">
					<h2><?=$layout["name"]?></h2>
					<p><?=$layout["description"]?></p>

				<?php } ?>

		</layout-list>

	</inner-column>
</section>
