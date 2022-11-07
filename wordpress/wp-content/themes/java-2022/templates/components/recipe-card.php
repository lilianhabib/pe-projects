<recipe-card>
<!-- 
	<img class="coffee-image" src="<?php wp_get_attachment_image( $attachment->ID, 'image' ); ?>">
	echo $attachments['post_content']; -->
<!-- 
	<img src= "wp_get_attachment_image_src(get_post_image_id($post->ID), 'medium')" ;> -->

	<h3 class='coffee-name'> <?php the_field('name'); ?></h3>
	<h3 class='time-and-yield'> <?php the_field('time_and_yield'); ?></h3>
	<ul> 
		<li class="ingredients"><?php the_field('ingredients'); ?> </li>
	</ul>

	<ol> 
		<li class="method"><?php the_field('method'); ?></li>
	</ol>


	