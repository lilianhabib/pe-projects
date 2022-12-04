<!-- <section> -->
	<things-grid>
		<h2><?=$section["heading"]?></h2>

		<ul>
		<?php foreach ($section["items"] as $item) { ?>
			<li>
				<h2><?=$item["title"]?></h2>
				<p><?=$item["copy"]?></p>
			</li>
		<?php } ?>

		</ul>
	</things-grid>
<!-- </section> -->