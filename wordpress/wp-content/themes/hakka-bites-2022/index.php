
<?php get_header(); ?> 



<?php 
	if (is_page('home') ){
		echo "<h1>Home</h1>";
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

	if (is_page('details')){
		$parameters = array(  
	        'post_type' => 'instructions',
	    );

	    $query = new WP_Query( $parameters ); 
	        
	    while ( $query->have_posts() ) : $query->the_post();  
	       echo "<h2>" . get_the_title() . "</h2>";   
	    endwhile;

	    wp_reset_postdata();
	}

	if (is_singular('recipe') ){
		echo "<h1>" . the_field('name') . "</h1>";
	}

	if (is_singular('recipe') ){
		echo "<p>" . the_field('instructions') . "</p>";
	}

	if (is_singular('recipe') ){
		echo "<p>" . the_field('images') . "</p>";
	}
	if (is_singular('recipe') ){
		echo "<li>" . the_field('ingredients') . "</li>";
	}
?>

<?php get_footer(); ?>