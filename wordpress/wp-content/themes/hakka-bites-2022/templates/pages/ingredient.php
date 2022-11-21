<section class='ingredient-section'>
	<inner-column> 

		<ul class='ingredient-card'>
		<?php 
			$parameters = array(  
		        'post_type' => 'ingredient',
		    ); // an associative array that will get all of the recipes 

		    $query = new WP_Query( $parameters ); 
		        
		    while ( $query->have_posts() ) : $query->the_post();  
		    	echo "<li class='ingredient-item'>";
		       include(getFile ('templates/components/ingredient-card.php'));
		       echo "</li>";
		    endwhile;

		    wp_reset_postdata();
		?>

		
		</ul>
	</inner-column>
</section>
