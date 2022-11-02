<?php get_header();?>


<?php 
	if (is_page('home') ) {
		echo "<h1>Home</h1>";
	}

	if (is_page ('list') ) {
		$args = array(  
	        'post_type' => 'cafes',
	    );

	    $loop = new WP_Query( $args ); 
	        
	    while ( $loop->have_posts() ) : $loop->the_post(); 
	        echo "<h2>" . get_the_title() . "</h2>"; 
 
	    endwhile;

	    wp_reset_postdata(); 
		}
?>

<?php get_footer();?>