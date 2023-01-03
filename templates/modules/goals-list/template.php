<?php 
	$json = file_get_contents("data/goals-data.json"); 
	$goals = json_decode("$json", true); 

?>



<section class='<?=$pageId?>'> 
	<inner-column>
		<goals-list> 

			<section class='goal-item'> 

				<?php foreach ($goals as $goal) { ?>
					<h2 class='lazy-voice'><?=$goal["heading"]?></h2>

					<ol>
						<?php foreach ($goal["goals"] as $goalItem) { ?>
							<li>
								<p class='normal-voice'><?=$goalItem?></p>
							</li>
						<?php } ?>
					</ol>


				<?php } ?>

		
			</section>

		</goals-list> 
	
	</inner-column>
</section>


