<?php 

	$json = file_get_contents('data/projects-data.json'); 
	$projects = json_decode($json, true); 

?>


<section class=''> 
	<inner-column>

		<projects> 

			<?php foreach ($projects as $project) { 
				$slug = $project["slug"];
				?>

				<h1><?=$project["name"]?></h1>
				<p><?=$project["description"]?></p>
				<a href="?page=project&slug=<?=$slug?>">Visit <span><?=$project["name"]?></span></a>
			<?php } ?>
	
		</projects>

	</inner-column>
</section>


<!-- 	<a href="<?=$link?>">View Case Study</a> -->


