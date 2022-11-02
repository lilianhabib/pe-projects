<?php 
/*Disable WordPress Admin Bar for all users - reset*/ 
add_filter('show_admin_bar' , '__return_false' ); 


//load css into the website's front-end
function mytheme_enqueue_style() {
	wp_enqueue_style ('mytheme-style', get_stylesheet_uri() ); 
}
add_action ( 'wp_enqueue_scripts', 'mytheme_enqueue_style' ); 



?>