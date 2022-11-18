<?php
	$name = get_field('name');
	$description = get_field('description');
	$image = get_field('image');
	$size = 'thumbnail';
	$thumb = $image['sizes'][ $size ];

?>

<recipe-card> 
	<inner-column>  
		<picture class='image' >
			<img src="<?php echo esc_url($image['url']);?>" <?php echo esc_url($thumb); ?> alt="<?php echo esc_attr($image['alt']); ?>" />
		</picture>
		<h2 class='loud-voice'><?=$name?></h2>
		<p class='description'><?=$description?></p>



		<a class='link' href='<?php the_permalink()?>'>
			<span>Read more</span>
		</a> 


	</inner-column>

</recipe-card>
