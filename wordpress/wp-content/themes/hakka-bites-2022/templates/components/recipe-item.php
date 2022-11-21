

<detail-card>  

	<?php  if( have_rows('recipe_item') ):?>

	
		   <?php while( have_rows('recipe_item') ) : the_row();?>

		   	<?php 
	
		$name = get_sub_field('name');
		$description = get_sub_field('description');
		$image = get_sub_field('image');
		$picture = $image['sizes']['large'];
		$instructions = get_sub_field('instructions');
	?>

		<!-- image -->

		   	<picture class='image'>
		   		<img src='<?php echo $picture;?>' alt='<?php echo $image['alt'];?>'>
		   	</picture>
		   
		<!-- name -->

		   	<h1 class='bold-voice'><?=$name?></h1>

		<!-- description -->
		<?php if (is_user_logged_in() ) {?>
			<p class='description'><?=$description?></p>
		<?php } ?>
	
		<!-- ingredients -->
	        <h2 class='loud-voice'>Ingredients</h2>

			<?php
			$featured_posts = get_field('ingredients');
			?>

			<?php if( $featured_posts ): ?>
			<ul class='ingredient-link'> 
				
				<?php foreach( $featured_posts as $post ): 

				setup_postdata($post); ?>
					<li class='ingredients'>
					<a href='<?php the_permalink()?>'>
						
						<?php the_title(); ?>

						<span class='ingredient-item'><?php the_field( 'ingredients' ); ?></span>
					
					</a>
					</li>
				<?php endforeach; ?>
				
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>




		<!-- instructions -->
			<h2 class='loud-voice'>Instructions</h2>

				<div> 
					<p><?=$instructions?></p>
				</div>
       
  
	        
		   <?php endwhile;?>
		
		<?php else : ?>
	<?php endif; ?>

</detail-card>