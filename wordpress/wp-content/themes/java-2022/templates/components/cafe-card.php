<cafe-card> 
	<h2 class='name'><?php the_field('name');?></h2>
	<h3 class='busy'>Busy: <?php the_field('busy');?></h3>

	<a href="<?php the_permalink(); ?>">Read More</a>
</cafe-card>