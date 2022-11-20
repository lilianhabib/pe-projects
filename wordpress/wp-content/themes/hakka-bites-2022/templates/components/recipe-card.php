

<recipe-card>  


<?php if( have_rows('recipe_item') ): ?>


    <?php while( have_rows('recipe_item') ) : the_row();?>

    		<?php
			
				$name = get_sub_field('name');
				$description = get_sub_field('description');
				$image = get_sub_field('image');
				$picture = $image['sizes']['large'];
				$instructions = get_sub_field('instructions');

				if ($picture) {
					$picture = $image['sizes']['large'];
				} else {
					$picture = "https://peprojects.dev/images/square.jpg";
				}
	   		
	   		?>

			
		   	<picture class='image' style='background-image: url(<?=$picture?>)'>
		   		<!-- <img src='<?php echo $picture;?>' alt='<?php echo $image['alt'];?>'> -->
		   	</picture>
		 

		   	<h1 class='bold-voice'><?=$name?></h1>

			<?php if ($description) {?>
				<p class='description'><?=$description?></p>
			<?php } else {?>
				<p class='soft-voice'>Coming soon</p>
			<?php } ?>
			


    <?php endwhile; ?>


<?php else : ?>
<?php endif; ?>



	<a class='link' href='<?php the_permalink()?>'>
		<span>Read more</span>
	</a> 

</recipe-card>


