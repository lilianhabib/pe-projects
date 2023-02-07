<?php if($type == "faqs") { ?>

<section class='faqs-section'> 
	<inner-column>

		<introduction>

			<h1 class='heading-voice'><?=$heading?></h1>
			<p class='quiet-voice'><?=$intro1?></p>

		</introduction>

		<div class='question-container'> 

				<?php foreach($module["components"] as $questions) { 
					$questionHeading = $questions['question-heading']; 
					$copy = $questions["copy"]; 
					$arrow = $questions['image'];
					?>
					
						<details> 
							<summary class='shy-voice'><?=$questionHeading?></summary>

							<div class='faqs-content'>
								<p class='detail-voice'>
									<span><?=$copy?></span>
								</p>
							</div>
						</details>
						
				<?php } ?>
					
		</div>


 
	</inner-column>

</section>
<?php } ?>