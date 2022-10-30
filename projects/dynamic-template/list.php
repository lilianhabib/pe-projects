<?php include ("car_data.php"); ?>

<h1>Auto Zone</h1>

<ul>

	<?php foreach ($car_data as $car) {?>

		<?php 
			$price = "$" . number_format($car["price"], 2, ".", ",");
		?>

		<li class="car">
			<car-card>
				<h2 class='make'>Make: <?=$car["make"]?></h2>
				<h3 class='model'>Model: <?=$car["model"]?></h3>
				<h3 class='year'>Year: <?=$car["year"]?></h3>
				<h4 class='price'>Price: <?=$price?></h4>
				<a href="?page=detail&car=<?=$car["id"]?>">See it now!</a>
			</car-card>
		</li>

	<?php } ?>

</ul>