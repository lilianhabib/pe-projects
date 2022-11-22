
<?php get_header(); ?> 


<?php 
	if (is_page('home') ){
		include ('templates/pages/home.php');
	}

	if (is_page('list')){
	      include('templates/pages/shop.php');
	
	}
	    
	if (is_page('detail')){
		include('templates/pages/detail.php');

	}
	if (is_singular('pants') ){
	include ('templates/components/pants-item.php');
	
	}

	if (is_404()) {
		include('templates/pages/page-not-found.php');
	}


?>



<?php get_footer(); ?>