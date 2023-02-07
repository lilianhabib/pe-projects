<?php if($type == "feature") { ?>



<section class='feature-section'> 
	<inner-column>

		<div class='section1'> 

			<h1 class='heading-voice'><?=$heading?></h1>
			<p class='quiet-voice'><?=$intro1?></p>
			<picture class='feature-img2'> 
				<img src='<?=$image?>'> 
			</picture>

		</div>

		<div class='section2'> 

			

				<?php foreach($module["components"] as $listItem) { 
					$listHeading = $listItem['list-heading']; 
					$listCopy = $listItem["copy"]; 
					$image = $listItem["image"];
					?>
					<div class='list-container'> 
					
						<picture class='feature-img'> 
							<img src='<?=$image?>'> 
						</picture>

						<text-content> 
							<h3 class='bold-voice'><?=$listHeading?></h3>
				
							<p class='detail-voice'><?=$listCopy?></p>
						</text-content>
					</div>
				<?php } ?>
					
		</div>


 
	</inner-column>

</section>
<?php } ?>