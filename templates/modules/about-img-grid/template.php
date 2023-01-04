<?php 
	$img = $section["img-list"] ?? "https://peprojects.dev/images/square.jpg";
	

?>

<section class=''>
	<inner-columm>

		<img-grid> 
			<?php foreach ($section["img-list"] as $img) {?>

				<picture class='about-grid'> 
					<img class='about-img' src="<?=$img?>">
				</picture>
				

			<?php } ?>
	
		</img-grid>
	</inner-columm> 
</section>	