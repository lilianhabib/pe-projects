<?php include ("cafe_data.php"); ?>




<h1 class="loud-voice">Java List</h1>

<ul class="cafe-list">

	<?php foreach ($cafe_data as $cafe_info) { ?>

		<li class="cafe">
			<cafe-card>
				<h2 class='calm-voice'>Name: <span class="detail-voice"><?=$cafe_info["name"]?></span></h2>
				<h3 class='calm-voice'>Busy: <span class="detail-voice"><?=$cafe_info["busy"]?></span></h3>
				<h3 class='calm-voice'>Wifi: <span class="detail-voice"><?=$cafe_info["wifi"]?></span></h3>
				<a href="?page=detail&cafe=<?=$cafe_info["id"]?>"><span class="excited-voice">See more</span></a>
			</cafe-card>
		</li>

	<?php } ?>

</ul>


