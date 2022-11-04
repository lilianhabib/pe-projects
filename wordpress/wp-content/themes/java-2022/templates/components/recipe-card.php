<recipe-card>

	<img class="coffee-image" src="<?php the_field('image'); ?>">
	<h3 class='coffee-name'> <?php the_field('name'); ?></h3>
	<h3 class='time-and-yield'> <?php the_field('time_and_yield'); ?></h3>
	<ul> 
		<li class="ingredients"><?php the_field('ingredients'); ?> </li>
	</ul>

	<ol> 
		<li class="method"><?php the_field('method'); ?> </li>
	</ol>

</recipe-card>