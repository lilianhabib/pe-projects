<?php include ('adoption_data.php'); ?>


<h1>Cats at Catoption</h1>

<ul>
	<?php foreach ($adoption_data as $adoption) { ?>

		<adoption-list>
			<picture>
				<img src="<?=$adoption['picture']?>" class='adoption-pic'>
			</picture>
			<h5 class='id'><?=$adoption['id']?></h5> 
			<h2 class="name"><?=$adoption['name']?></h2>
			<h3 class="gender"><?=$adoption['gender']?></h3>
			<h4 class="available"><?=$adoption['available']?></h4>
			<a href="?page=detail&cat=<?=$adoption['name']?>">View more</a>
		</adoption-list>

	<?php } ?>

</ul>



	