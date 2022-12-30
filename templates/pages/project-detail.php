<?php 

	$json = file_get_contents('data/projects-data.json'); 
	$projectsJson = json_decode($json, true); 


	foreach ($projectsJson as $thatProject) {
		if ($thatProject["slug"] == $_GET["slug"]) {
			$chosenProject = $thatProject;
		}
	}

	$date = $chosenProject["date"];
	


?>


<?php foreach ($chosenProject["sections"] as $section) { 
	$heading = $section["heading"]; 
	?>


	<h1><?=$heading?></h1>
<?php } ?>

<p><?=$date?></p>
