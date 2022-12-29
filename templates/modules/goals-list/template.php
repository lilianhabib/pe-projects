<section class=''> 
	<inner-column>
		<goals-list> 

			<section> 

				<h1><?=$section["heading"]?></h1>
				
				<ol>
					<?php foreach ($section["goals"] as $goalItem) { ?>
						<li>
							<p><?=$goalItem?></p>
						</li>
					<?php } ?>
				</ol>
			</section>

		</goals-list> 
	
	</inner-column>
</section>


