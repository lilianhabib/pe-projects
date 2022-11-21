
<?php get_header(); ?> 


<?php 
	if (is_page('home') ){
		include ('templates/pages/home.php');
	}

	if (is_page('list')){
	      include('templates/pages/list.php');
	
	}
	    
	if (is_page('detail')){
		include('templates/pages/detail.php');

	}
	if (is_singular('recipe') ){
		include ('templates/components/recipe-item.php');
	}


	if (is_page('ingredient')){
		include('templates/pages/ingredient.php');

	}

	if (is_singular('ingredient') ){
		include ('templates/components/ingredient-card.php');
	}
	
	

	if (is_404()) {
		include('templates/pages/page-not-found.php');
	}


?>



<?php get_footer(); ?>