<?php 

	$heading = "Big-Heading placeholder"; 

	if ( isset ($section["heading"]) ){
		$heading = $section["heading"];
	}

	// Method 2 if/else statement: 
	// $heading = isset( $section["heading"] ) ? $section["heading"] : "Big heading placeholder"; 

	//Method 3
	// $heading = $section["heading"] ?? "big heading placeholder"; 

?>

<big-heading>
	<h1 class="loud-voice"><?=$heading?></h1>
	<p class="detail-voice"><?=$section["detail"]?></p>
</big-heading>


<!-- Done to unset the heading function 
<?php 
	
	unset($heading); 

?> -->