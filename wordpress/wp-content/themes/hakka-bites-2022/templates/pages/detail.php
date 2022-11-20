
<section class='detail-section'>
	<inner-column> 

		<ul class='detail-list'>
		<?php 
			$parameters = array(  
		        'post_type' => 'recipe',
		    ); // an associative array that will get all of the recipes 

		    $query = new WP_Query( $parameters ); 
		        
		    while ( $query->have_posts() ) : $query->the_post();  
		    	echo "<li class='recipe-item'>";
		       include(getFile ('templates/components/recipe-item.php'));
		       echo "</li>";
		    endwhile;

		    wp_reset_postdata();
		?>
		</ul>
	</inner-column>
</section>
