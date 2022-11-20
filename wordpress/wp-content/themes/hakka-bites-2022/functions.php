<?php 

function getFile($path) {
  return dirname(__FILE__) . '/' . $path; 
}

/*Disable WordPress Admin Bar for all users - reset*/ 
add_filter('show_admin_bar' , '__return_false' ); 


// style css 
wp_enqueue_style('style', get_stylesheet_uri() ); 

function site_styles() {
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() .'/style.css' . "?ver=" . date("His")); // adding a version - to ensure that cache is busted
}
add_action( 'wp_enqueue_scripts', 'site_styles' );


//menus
function register_my_menu() {
  register_nav_menu('site-menu',__( 'Site menu' ));
}
add_action( 'init', 'register_my_menu' );