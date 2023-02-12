<?php 

	$json = file_get_contents('data/style-guide-data.json'); 
	$styleGuideData = json_decode($json, true); 

	$pageId = "home"; 
	if (isset($_GET["page"]) ){
		$pageId = $_GET["page"]; 
	}


?>

<hr>

<section class='<?=$pageId?>'> 
	<inner-column>
		
		<style-guide>

			


			<?php foreach ($styleGuideData as $style) { ?>

				<section class='data'> 

					<h2 class="bold-voice"><?=$style["heading"]?></h2>
					<hr>

					<h3 class="lazy-voice"><?=$style["copy"]?></h3>
					
					<?php foreach ($style["examples"] as $example) { ?>

	
						<?php if (isset($example["example1"]) ) { ?>
							<h1 class='loud-voice'><?=$example["example1"]?></h1>
						<?php } ?> 

						<?php if (isset($example["blurb1"]) ) { ?>
							<p class='normal-voice'><?=$example["blurb1"]?></p>
						<?php } ?> 

					

						<?php if (isset($example["example2"]) ) { ?>
							<h2 class='lazy-voice'><?=$example["example2"]?></h2>
						<?php } ?> 

						<?php if (isset($example["blurb2"]) ) { ?>
							<p class='normal-voice'><?=$example["blurb2"]?></p>
						<?php } ?> 

						

						<?php if (isset($example["example3"]) ) { ?>
							<p class='bold-voice'><?=$example["example3"]?></p>
						<?php } ?> 

						<?php if (isset($example["blurb3"]) ) { ?>
							<p class='normal-voice'><?=$example["blurb3"]?></p>
						<?php } ?>

				

						<?php if (isset($example["example4"]) ) { ?>
							<p class='normal-voice'><?=$example["example4"]?></p>
						<?php } ?> 

						<?php if (isset($example["blurb4"]) ) { ?>
							<p class='normal-voice'><?=$example["blurb4"]?></p>
						<?php } ?>

				
					
					<?php } ?>
						
				</section> 

			<?php } ?>

		</style-guide>

	</inner-column>
</section>

