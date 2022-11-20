
<section class='recipe-section'>
	<inner-column> 

		<div class='intro'>  
			<p class='soft-voice'>Here is a list of my favourite Hakka dishes that brought many fond memories to my family. I hope that these dishes will bring happiness and love to you and your family as it did mine.</p>
		</div>

		<ul class='recipe-list'>
		<?php 
			$parameters = array(  
		        'post_type' => 'recipe',
		    ); // an associative array that will get all of the recipes 

		    $query = new WP_Query( $parameters ); 
		        
		    while ( $query->have_posts() ) : $query->the_post();  
		    	echo "<li class='recipe'>";
		       include(getFile ('templates/components/recipe-card.php'));
		       echo "</li>";
		    endwhile;

		    wp_reset_postdata();
		?>
		</ul>
	</inner-column>
</section>


