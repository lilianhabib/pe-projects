<?php 
	$json = file_get_contents("data/goals-data.json"); 
	$goals = json_decode("$json", true); 

?>



<section class='<?=$pageId?>'> 
	<inner-column>
		<goals-list> 
			<div class="page-links"> 

				<a href="?page=about" class='page-link'>About</a>

				<a href="?page=resume" class='page-link'>Resume</a>

			</div> 

			<?php foreach ($goals as $goal) { ?>

				<section class="goal-item"> 
					<h2 class='lazy-voice'><?=$goal["heading"]?></h2>
					<hr>


					<ol class='goal-list'>
						<?php foreach ($goal["goals"] as $goalItem) { ?>
							<li>
								<p class='normal-voice'><?=$goalItem?></p>
							</li>
						<?php } ?>
					</ol>
				</section>


			<?php } ?>

	

		</goals-list> 
	
	</inner-column>
</section>


