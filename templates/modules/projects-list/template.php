<?php 

	$json = file_get_contents('data/projects-data.json'); 
	$projects = json_decode($json, true); 

	$pageId = "home"; 
	if (isset($_GET["page"]) ){
		$pageId = $_GET["page"]; 
	}
?>


<section class='<?=$pageId?>'> 
	<inner-column>

		<div class="page-links"> 

				<a href="?page=layouts" class='page-link'>Responsive Layout Garden</a>

				<a href="?page=exercises" class='page-link'>Exercise for Programmers</a>

		</div> 


		<projects-list> 
			
			<?php foreach ($projects as $project) { 
				$slug = $project["slug"];
				?>

				<section class='project-list'>
					<div class="project-info"> 

						<div class='text-content'>

							<h2 class='bold-voice'><?=$project["name"]?></h2>
							<p class='normal-voice'><?=$project["description"]?></p>
							<p class='normal-voice'><?=$project["language"]?></p>

						</div>
						<div class='project-button'> 
							<a href="?page=project&slug=<?=$slug?>" class='page-link'>Visit <span><?=$project["name"]?></span></a>
						</div>
					</div>

				</section>
			<?php } ?>
	
		</projects-list>

	</inner-column>
</section>


<!-- 	<a href="<?=$link?>">View Case Study</a> -->


