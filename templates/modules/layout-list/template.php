<?php 

	$json = file_get_contents("data/layouts-data.json");
	$layouts = json_decode($json, true); 
?>

<section class=''>
	<inner-column> 

		<layout-list>

				<?php foreach ($layouts as $layout) { 
					$slug = $layout["slug"];
					$name = $layout["name"]; 

					?>
			
					<h2><?=$layout["name"]?></h2>
					<p><?=$layout["description"]?></p>
					<?php include ("layouts/$name/$slug.php");?>
					<!-- <a href="?page=layout&<?=$slug?>">Visit <?=$name?></a> -->


				<?php } ?>

				

		</layout-list>

	</inner-column>
</section>
