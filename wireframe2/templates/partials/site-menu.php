<?php
	
	$json = file_get_contents('data/site-menu.json');
	$menuData = json_decode($json, true); 

	foreach ($menuData as $menu) {
		$type = $menu['type'];

?>

<site-menu>
	<nav class='site-menu'>

		<?php if ($type == "logo") { ?>

			<picture class='site-img'> 

				<a href="#"><?php include ($menu['image']); ?></a>
			</picture>

		<?php } ?>


		<?php if($type == "nav-items") {?>


			<ul class='menu-list'>
				<?php foreach ($menu["listItems"] as $item){?>
					<li class='menu-item'> 
						<a href="#"><?=$item['page']?></a>
					</li>
				<?php }?>
			</ul>
		

		<?php } ?>


		<?php if($type == "language") { ?>

			<div class='language'> 
				<p><?=$menu["text"]?></p>

				<picture class='menu-img'>

					<a href='#'><?php include ($menu["image"])?></a>
				</picture>
			</div>

		<?php } ?>
	</nav>
		
</site-menu>
<?php } ?>