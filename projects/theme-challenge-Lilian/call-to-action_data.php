<?php
$products = [ // an associative array (Array of key:value pairs)
	[
		"heading" => "Eye Serum",
		"description" => "Hydrates your eyes.",
		"thumbnail" =>  "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/product1.jpg",

	],
	[
		"heading" => "Face Cream",
		"description" => "Hydrating daily face cream.",
		"thumbnail" => "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/product2.jpg",
	],
	[
		"heading" => "Daily Cleanser",
		"description" => "Hydrating daily cleanser.",
		"thumbnail" =>  "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/product3.jpg",
	],
	[
		"heading" => "Daily Exfoliator ",
		"description" => "Hydrating daily exfoliator.",
		"thumbnail" =>  "https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/product4.jpg",
	],
];
foreach ($products as $product){
	$heading = $product["heading"]; 
	$description = $product["description"]; 
	$thumbnail = $product["thumbnail"]; 
}


?>
