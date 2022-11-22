<section class='shop-section'>
	<inner-column> 

		<ul class='shop-list'>
		<?php 
			$parameters = array(  
		        'post_type' => 'pants',

		    ); // an associative array that will get all of the recipes 

		    $query = new WP_Query( $parameters ); 
		        
		    while ( $query->have_posts() ) : $query->the_post();  
		    	echo "<li class='shop-item'>";
		       include(getFile ('templates/components/shop-card.php'));
		       echo "</li>";
		    endwhile;

		    wp_reset_postdata();
		?>

		<?php 
			$parameters = array(  
		        'post_type' => 'shirt',
		        
		    ); // an associative array that will get all of the recipes 

		    $query = new WP_Query( $parameters ); 
		        
		    while ( $query->have_posts() ) : $query->the_post();  
		    	echo "<li class='shop-item'>";
		       include(getFile ('templates/components/shop-card.php'));
		       echo "</li>";
		    endwhile;

		    wp_reset_postdata();
		?>

		<?php 
			$parameters = array(  
		        'post_type' => 'sweater',
		        
		    ); // an associative array that will get all of the recipes 

		    $query = new WP_Query( $parameters ); 
		        
		    while ( $query->have_posts() ) : $query->the_post();  
		    	echo "<li class='shop-item'>";
		       include(getFile ('templates/components/shop-card.php'));
		       echo "</li>";
		    endwhile;

		    wp_reset_postdata();
		?>




		</ul>
	</inner-column>
</section>
