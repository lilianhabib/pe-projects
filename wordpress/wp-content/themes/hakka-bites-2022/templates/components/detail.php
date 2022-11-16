<detail-card> 
	<img class='image' src='<?php the_field('image')?>'>
	<?php foreach($ingredients as $ingredient);?>
		<ul> 
			<li><?php echo get_page_link($ingredient->ID);?></li>
		</ul>
	<?php echo $ingredient ->post_content;?>

	<p class='instructions'><?php the_field('instructions')?></p>
</detail-card>