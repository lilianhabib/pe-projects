
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

	if (is_singular('recipe') ){
		echo "<h2 class='name'>" . get_field('name') . "</h2>";
	}

	if (is_singular('recipe') ){
		echo "<p class='instructions'>" . get_field('instructions') . "</p>";
	}

	$image = get_field('image'); 
	get_field('image');
	echo var_dump ($image);
?>

<?php get_footer(); ?>