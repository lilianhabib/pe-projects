<?php 

	$json = file_get_contents("data/site-menu-data.json"); 
	$menuData = json_decode($json, true); 
?>

<site-menu>
	<nav class='site-menu'> 

		<?php foreach($menuData as $menuItem) { 
			$class = $menuItem['class'];
			?>
			
		

			<?php foreach($menuItem['components'] as $links) {

				$page = $links["list-item"];
				$link = $links["link"];
				$image = $links["image"];
				$compClass = $links['class'];

			?>


				<ul class='menu-list  <?=$compClass?>'>
					<picture class='site-img'> 
						<img src="<?=$image?>">
					</picture>
				
					<li class='menu-item <?=$class?>'><a href='<?=$link?>'><?=$page?></a></li>
					
				</ul>


			<?php } ?>
			
		<?php } ?>
		


	</nav>
</site-menu>