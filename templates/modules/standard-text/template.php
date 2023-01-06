<?php 
	$json = file_get_contents("data/about-data.json");
	$thatAbout = json_decode ($json, true); 

?>


<section class=''> 
	<inner-column>
		<div class="page-links"> 

			<a href="?page=resume" class='page-link'>Resume</a>
			<a href="?page=goals" class='page-link'>Goals</a>

		</div>  

		<about-text>
			

			<?php foreach ($thatAbout as $about) {
				$copy = $about["copy"] ?? "Default text"; 
				$heading = $about["heading"] ?? "Default text";
				?>

				<div class='copy'> 

					<?php if (isset ($about["copy"]) ) { ?>
						<p class="normal-voice"><?=$copy?></p>
					<?php } ?>
			
				</div>

			<?php  } ?>

			

		</about-text>

		<img-grid>
			<?php foreach ($about["image"] as $img) { ?>

				<picture class='about-grid'> 

					<img class='about-img' src='<?=$img?>'>
						
				</picture>

			<?php  } ?>
		</img-grid>
		

		</about-text>
	</inner-column>
</section>