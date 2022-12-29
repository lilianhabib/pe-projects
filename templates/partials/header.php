<?php
	$pageData = pageData()
?>


<header class="page-header"> 
	<inner-column> 

		<?php if (isset ($pageData["title"]) ) { ?>
			<h1><?=$pageData["title"]?></h1>
		<?php } ?>

		<?php if (isset($pageData["intro"]) ) { ?>
			<p><?=$pageData["intro"]?></p>
		<?php } ?>
		
	
	</inner-column>
</header> 