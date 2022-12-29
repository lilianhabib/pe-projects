<?php 


?>


<section class=''>
	<inner-column> 

		<generic-text> 

			<?php if ($section["heading"]) { ?>

				<h1><?=$section["heading"]?></h1>

			<?php } ?>


			<p><?=$section["copy"]?></p>


			<?php if ($section["image"]) {?> 

				<img src="<?=$section['image']?>">

			<?php } ?>

		</generic-text>

	</inner-column>
</section>
