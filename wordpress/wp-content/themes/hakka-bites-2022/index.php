
<?php get_header(); ?> 



<?php 
	if (is_page('home') ){
		include ('templates/pages/home.php');
	}

	if (is_page('list')){
		$parameters = array(  
	        'post_type' => 'recipe',
	    );

	    $query = new WP_Query( $parameters ); 
	        
	    while ( $query->have_posts() ) : $query->the_post();  
	       include('templates/components/recipe-card.php');
	    endwhile;

	    wp_reset_postdata();
	}

	if (is_page('detail')){
		$parameters = array(  
	        'post_type' => 'recipe',
	    );

	    $query = new WP_Query( $parameters ); 
	        
	    while ( $query->have_posts() ) : $query->the_post();  
	       include('templates/pages/detail.php');
	    endwhile;

	    wp_reset_postdata();
	}

	if (is_singular('recipe') ){
		include ('templates/pages/detail.php');
	}


?>



<?php get_footer(); ?>