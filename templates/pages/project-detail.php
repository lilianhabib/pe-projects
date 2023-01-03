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
	$name = $chosenProject['name'];
	$url = $chosenProject["url"];
	$language = $chosenProject["language"]; 


?>
<section class='<?=$pageId?>'> 
	<inner-column>

		<work-detail> 

			<section class=''> 
				<h1 class='loud-voice'><?=$name?></h1>
				<span><?=$date?></span>
				<p class="normal-voice"><?=$description?></p>
				<p class="normal-voice"><?=$language?></p>
				<a href="<?=$url?>" target="_blank" class="page-link">Visit <?=$name?></a>
	
			</section>

			 

				<?php foreach ($chosenProject["sections"] as $section) { 

					$heading = $section["heading"]; 
					$copy = $section ["copy"]; 
					$image = $section["image"];

				?>
				<section class='work-info'>

					<h2 class="lazy-voice"><?=$heading?></h2>
					<p class="normal-voice"><?=$copy?></p>
					<img src="<?=$image?>">

				</section>
				<?php } ?>
	
		</work-detail>

	</inner-column>
</section>



