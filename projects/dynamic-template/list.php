<?php include ("data.php"); ?>

<h1>Java List</h1>

<ul>

	<?php foreach ($data as $cafe_data) {?>

		<li class="car">
			<car-card>
				<h2 class='name'>Name: <?=$cafe_data["name"]?></h2>
				<h3 class='address'>Address: <?=$cafe_data["address"]?></h3>
				<h3 class='wifi'>Wifi: <?=$cafe_data["wifi"]?></h3>
				<h4 class='price'>Price: <?=$cafe_data["price"]?></h4>
				<a href="?page=detail">See more</a>
			</car-card>
		</li>

	<?php } ?>

</ul>


<!-- &cafe=<?=$cafe_data["name"]? -->