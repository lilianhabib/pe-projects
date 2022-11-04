<?php 
/*Disable WordPress Admin Bar for all users - reset*/ 
add_filter('show_admin_bar' , '__return_false' ); 


//load css into the website's front-end

function site_styles() {
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() .'/style.css' . "?ver=" . date("His")); // adding a version - to ensure that cache is busted
}
add_action( 'wp_enqueue_scripts', 'site_styles' );

