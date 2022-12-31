<?php 
	$json = file_get_contents("data/goals-data.json"); 
	$goals = json_decode("$json", true); 

?>



<section class=''> 
	<inner-column>
		<goals-list> 

			<section> 

				<?php foreach ($goals as $goal) { ?>
					<h1><?=$goal["heading"]?></h1>

					<ol>
						<?php foreach ($goal["goals"] as $goalItem) { ?>
							<li>
								<p><?=$goalItem?></p>
							</li>
						<?php } ?>
					</ol>


				<?php } ?>

		
			</section>

		</goals-list> 
	
	</inner-column>
</section>


