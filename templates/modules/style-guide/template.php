<?php 

	$json = file_get_contents('data/projects-data.json'); 
	$projects = json_decode($json, true); 

	$pageId = "home"; 
	if (isset($_GET["page"]) ){
		$pageId = $_GET["page"]; 
	}
?>


<section class='<?=$pageId?>'> 
	<inner-column>

		<style-guide> 
			
		
	
		</style-guide>

	</inner-column>
</section>

