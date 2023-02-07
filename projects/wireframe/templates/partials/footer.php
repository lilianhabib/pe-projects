<?php 
	$json = file_get_contents('data/footer-data.json');
	$footerData = json_decode($json, true); 

?>
<site-map>

	<links>

		<footer-item>

			<?php foreach ($footerData as $footerInfo) {
				$heading = $footerInfo["heading"];
				$class = $footerInfo["class"];
			?>


				<div class="category <?=$class?>"> 
					<h3 class='tiny-voice'><?=$heading?></h3>

					<?php foreach($footerInfo["components"] as $footerCopy) {
						$copy = $footerCopy["copy"]; 
						$link = $footerCopy["link"]; 
						$image = $footerCopy["image"];
						$class = $footerCopy["class"];
						?>

						<list-item class="<?=$class?>"> 
							<a href="<?=$link?>" class='text detail-voice'><?=$copy?></a>

							<!-- <p class='text detail-voice'><?=$copy?></p> -->

							<picture class='<?=$class?>'> 
								<img src='<?=$image?>'>
							</picture>
						</list-item>

					<?php } ?>
				</div>

			<?php } ?>

		</footer-item>

	</links>
	
</site-map>

