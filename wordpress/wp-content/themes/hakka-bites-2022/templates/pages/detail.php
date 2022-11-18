<?php
	$name = get_field('name');
	$description = get_field('description');
	$image = get_field('image');
	$size = 'thumbnail';
	$thumb = $image['sizes'][ $size ];
	$instructions = get_field('instructions') 


?>


<detail-card>  
	<inner-column>
		<picture>
			<img src="<?php echo esc_url($image['url']);?>" <?php echo esc_url($thumb); ?> alt="<?php echo esc_attr($image['alt']); ?>" />
		</picture>

		<h1 class='bold-voice'><?=$name?></h1>

		<h2 class='loud-voice'>Ingredients</h2>
		<?php
		$featured_posts = get_field('ingredients');
		if( $featured_posts ): ?>
		<ul class='detail-list'>
		<?php foreach( $featured_posts as $post ): 

		setup_postdata($post); ?>
		<li>
		    <?php the_title(); ?>
		    <span class='soft-voice'><?php the_field( 'ingredients' ); ?></span>
		</li>
		<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>


		<h2 class='loud-voice'>Instructions</h2>
			<div class='instruction-list'> 
				<?php the_field('instructions'); ?> 
			</div>
	</inner-column>
</detail-card>