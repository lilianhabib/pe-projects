
<?php
	// you could simplify the $variables up here if you want....
	// example
	$thumbnail = $product["thumbnail"];
	// it may or may not - be more readable
?>


<!-- 	<h2 class='attention-voice'>This module is a "call to action"</h2>

	<p class='calm-voice'>Vitamin C Eye Serum</p>

	<a href='#'>
		<span>Add to Cart</span>
	</a> -->



<call-to-action>

	<picture>
		<img src='<?=$thumbnail?>' loading='lazy' alt='$todo' class='article-pic'>
	</picture>

	<h2 class='shy-voice'><?=$product["heading"]?></h2>

	<p class='noisy-voice'><?=$product["description"]?></p>

	<a class='buy' href='#'>
		<span>Add to Card</span>
	</a>

</call-to-action>
