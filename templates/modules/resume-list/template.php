

<section class=''>
	<inner-column> 

		<resume-list> 
				
			<?php foreach ($section["experiences"] as $experienceItem) { ?>

				<div class='item-group'>
					<h2><?=$experienceItem['name']?></h2>
					<span><?=$experienceItem["year"]?></span>
				</div>

				<?=$experienceItem["company"]?>
				
				
				
				<ul> 
					<?php foreach ($experienceItem['description'] as $descriptionItem) { ?>

						<li><?=$descriptionItem?></li>

					<?php } ?>
				</ul>


			<?php } ?>
			

				

		</resume-list>

	</inner-column>
</section>
