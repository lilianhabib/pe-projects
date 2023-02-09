<?php if($type == "client") { ?>


	<section class='client-section'> 
	<inner-column>
		<introduction> 
			<h1 class='heading-voice'><?=$heading?></h1>
			<p class='quiet-voice'><?=$intro1?></p>
		</introduction> 

		<reviews> 

			<?php foreach($module["components"] as $review) { 
				$copy = $review['copy']; 
				$name = $review["name"];
				$image1 = $review ["image1"];
				$image2 = $review["image2"];

				?>

				<div class="review-list"> 
					<picture class='client-stars'>
						<img src="<?=$image1?>">
					</picture>
					<p class='shy-voice'><?=$copy?></p>
				
					<picture class='client-circle'>
						<img src="<?=$image2?>">
					</picture>
					<span><?=$name?></span>
				</div>

			<?php }?>



		</reviews>

	</inner-column>

	</section>
<?php } ?>

