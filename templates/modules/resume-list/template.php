<?php 
	
	$json = file_get_contents("data/resume-data.json"); 

	$resumeData = json_decode($json, true); 


?>

<section class=''>
	<inner-column> 
		<div class="page-links"> 

				<a href="?page=about" class='page-link'>About</a>

				<a href="?page=goals" class='page-link'>Goals</a>

		</div> 

		<resume-list>


			<?php foreach ($resumeData as $resume) {?>
				<h2 class='lazy-voice'><?=$resume["heading"]?></h2>
				<hr>


				<?php foreach ($resume["sections"] as $resumeSection) { ?>
		
					<div class='year-content'> 
						<h3 class='little-voice'><?=$resumeSection["name"]?></h3>
						<p class='normal-voice'><?=$resumeSection["year"]?></p>
					</div>


					<p class='normal-voice'><?=$resumeSection["company"]?></p>
					<ul class='resume-list'> 
						<?php foreach($resumeSection["description"] as $description) { ?>

							<li class='resume-item'> 
								<p class="normal-voice"><?=$description?></p>
							</li>
						<?php } ?>
					</ul>
			
				<?php } ?>
		
			<?php } ?>
			
				
		
		

				

		</resume-list>

	</inner-column>
</section>
