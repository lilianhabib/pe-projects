

<?php
	$pageData = pageData();
	$pageId = "home"; 
	if (isset($_GET["page"]) ){
		$pageId = $_GET["page"]; 
	}



?>


<header class="page-header"> 

	<inner-column> 
		<div class="<?=$pageId?>">

			<?php if (isset ($pageData["title"]) ) { ?>
				<h1 class='loud-voice'><?=$pageData["title"]?></h1>
			<?php } ?>

		</div>

		<div class="<?=$pageId?>"> 
			<?php if (isset($pageData['intro']) ) { ?>
				<p class='intro-voice'><?=$pageData["intro"]?></p>
			<?php } ?>
			
	
		</div>
		
	
	</inner-column>
</header> 