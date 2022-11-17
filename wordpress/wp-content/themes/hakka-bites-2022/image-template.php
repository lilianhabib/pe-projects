<?php 
	$image = get_field('image'); 
	$picture = $image['sizes']['large']; 

	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>

<?php endwhile; else: endif; ?>

 <img src='<?php echo $picture;?>' class='img-fluid'> 

<?php 
var_dump ($image);