
<?php 




// $projectSlug = "";
// if (isset($_GET["slug"]) ) {
// 	$projectSlug = $_GET["slug"]; 
// }

// foreach ($section as $projectDetail) {
// 	if ($projectSlug == $projectDetail["project-name"]) {
// 		$project = $projectDetail;
// 	}
// }

?>


<section class=''> 
	<inner-column>

		<projects> 

			<span><?=$section["slug"]?></span>
			<h2><?=$section["name"]?></h2>
			<p><?=$section['date']?></p>
			<p><?=$section['language']?></p>
			<p><?=$section['description']?></p>
		

			<?php foreach($section["project-detail"] as $detail) { ?>

				<h1><?=$detail["heading"]?></h1>
				<p><?=$detail["copy"]?></p>
			<?php } ?> 
	
		</projects>

	</inner-column>
</section>
