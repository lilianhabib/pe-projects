<recipe-card> 
	<h2 class='image'><?php the_field('image');?></h2>
	<h3 class='name'>Busy: <?php the_field('name');?></h3>
	<h3 class='ingredients'><?php the_field('ingredients');?></h3>
	<h3 class='instructions'>Busy: <?php the_field('instructions');?></h3>

	<a href="<?php the_permalink(); ?>">Read More</a>
</recipe-card>