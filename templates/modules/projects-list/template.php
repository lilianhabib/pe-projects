<?php 

$link = "?page=module&name=$section[url]&slug=$section[slug]";


?>


<section class=''> 
	<inner-column>

		<projects> 

			<span><?=$section["slug"]?></span>
			<h2><?=$section["name"]?></h2>
			<p><?=$section['description']?></p>
			<a href="?page=<?=$section['url']?>" target='_blank'>View Case Study</a>
		
	
		</projects>

	</inner-column>
</section>


<!-- 	<a href="<?=$link?>">View Case Study</a> -->


