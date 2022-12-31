<?php 

	$json = file_get_contents('data/projects-data.json'); 
	$projectsJson = json_decode($json, true); 


	foreach ($projectsJson as $thatProject) {
		if ($thatProject["slug"] == $_GET["slug"]) {
			$chosenProject = $thatProject;
		}
	}

	$date = $chosenProject["date"];
	$description = $chosenProject["description"]; 


?>
<section class=''> 
	<inner-column>

		<project-detail> 

			<section class=''> 

				<span><?=$date?></span>
				<p><?=$description?></p>
			</section>

			<section class=''> 

				<?php foreach ($chosenProject["sections"] as $section) { 

					$heading = $section["heading"]; 
					$copy = $section ["copy"]; 
					$image = $section["image"]; 
				?>

					<h1><?=$heading?></h1>
					<p><?=$copy?></p>
					<img src="<?=$image?>">

				<?php } ?>
			</section>
	
		</project-detail>

	</inner-column>
</section>



