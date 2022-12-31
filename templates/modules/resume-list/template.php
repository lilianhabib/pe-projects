<?php 
	
	$json = file_get_contents("data/resume-data.json"); 

	$resumeData = json_decode($json, true); 


?>

<section class=''>
	<inner-column> 

		<resume-list>


			<?php foreach ($resumeData as $resume) {?>
				<h1><?=$resume["heading"]?></h1>

				<?php foreach ($resume["sections"] as $resumeSection) { ?>
						<h2><?=$resumeSection["name"]?></h2>
						<p><?=$resumeSection["year"]?></p>
						<p><?=$resumeSection["company"]?></p>
						<ul> 
							<?php foreach($resumeSection["description"] as $description) { ?>

								<li> 
									<?=$description?>
								</li>
							<?php } ?>
						</ul>
				<?php } ?>
				
				

			<?php } ?>
			
				
		
		

				

		</resume-list>

	</inner-column>
</section>
