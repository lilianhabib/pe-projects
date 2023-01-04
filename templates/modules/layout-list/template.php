<?php 

	$json = file_get_contents("data/layouts-data.json");
	$layouts = json_decode($json, true); 
?>

<section class='<?=$pageId?>'>
	<inner-column> 
		<div class="page-links"> 

                <a href="?page=exercises" class='page-link'>Exercises for Programmers</a>

                <a href="?page=projects" class='page-link'>Projects</a>

        </div> 

		<layout-list>

				<?php foreach ($layouts as $layout) { 
					$slug = $layout["slug"];
					$name = $layout["name"]; 
					$description = $layout["description"]; 

					?>

					<section class="layout-item">
			
						<p><?=$description?></p>
						<?php include ("layouts/$name/$slug.php");?>
		
					</section>

				<?php } ?>

		</layout-list>

	</inner-column>
</section>
