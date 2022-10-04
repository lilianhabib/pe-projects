	<head> 
		<meta charset="utf-8">
		<meta name="author" content="Lilian Habib">
		<meta name="description" content="[insert description]">

		<meta name="viewport" content="width=device-width,initial-scale=1">
	

		<meta property="og:image" content="[insert link]">
		

		<link rel="shortcut icon" href="[insert link]" type="image/png">

		<link rel='stylesheet' href='[insert link]'>
		
		<!-- font --> 
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">

	
		<!-- Facebook Meta Tags -->
		  <meta property="og:url" content="https://peprojects.dev/alpha-5/lilian/">
		  <meta property="og:type" content="website">
		  <meta property="og:title" content=" index ">
		  <meta property="og:description" content="[insert description]">
		  <meta property="og:image" content="https://peprojects.devimages/metalilian.png?hello">

		  <!-- Twitter Meta Tags -->
		  <meta name="twitter:card" content="summary_large_image">
		  <meta property="twitter:domain" content="peprojects.dev">
		  <meta property="twitter:url" content="https://peprojects.dev/alpha-5/lilian">
		  <meta name="twitter:title" content=" index ">
		  <meta name="twitter:description" content="[insert description]">
		  <meta name="twitter:image" content="https://peprojects.devimages/metalilian.png">

		<title>Monster Adoption</title>
	</head>  

	<style> 

		body{
			background-color: #FFF4D3;
		}
		h1{
			font-family: 'Avenir';
			color: #D18586;
			font-size: 60px;
			text-align: center;

		}
		.monster-list{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			list-style: none;	
		}

		.monster{
			background-color: #FFDC71;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			width: 700px;
			margin-bottom: 50px;
			font-family: 'Avenir';
			font-size: 15px;
		}

		.name{
			font-family: 'Avenir';
			font-weight: black;
			font-size: 20px;
		}

		.story{
			text-align: center;			
			font-family: 'Avenir';
			font-size: 15px;
		}

		.portrait{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding-top: 20px;
			
		}

		.form{
			display: block;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background-color: #D18586;
			border: none;
			border-radius: 5px;
			width: 200px; 
			height: 30px;
			font-family: 'Avenir';
			font-size: 20px;
		}

		.adopt{
			margin-left: auto;
			margin-right: auto;
			background-color: #D18586;
			border: none;
			border-radius: 5px;
			width: 100px; 
			height: 30px;
			margin-top: 20px;
		}

		.status{
			text-align: center;
		}

		.intro-paragraph{
			text-align: center;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			max-width: 120vh;
			font-family: 'Avenir';
			font-size: 20px;

		}


		@media (max-width: 800px){
			.monster{
				width: 300px;
			}

			.intro-paragraph
		}


	</style>


<?php

	$codey = [
		"id" => "4853",
		"name" => "Codey", 
		"favouriteFood" => "noodles",
		"age" => 87,
		"adopted" => true,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/codey.jpg", 
	];

	// $codeystory = "<p>" . $codey["name"] . " is " . $codey["age"] . " years old and her favourite food is " . $codey["favouriteFood"] . ". </p>"; 

	// echo $codeystory; 

	$lima = [
		"id" => "6962",
		"name" => "Limabean", 
		"favouriteFood" => "vegetables",
		"age" => 12,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/limabean.jpg", 
	];

	// $limastory = "<p>" . $lima["name"] . " is " . $lima["age"] . " years old and her favourite food is " . $lima["favouriteFood"] . ". </p>";

	// echo $limastory; 

	$reads = [
		"id" => "1063",
		"name" => "Miss reads-a-lot", 
		"favouriteFood" => "chocolate covered almonds",
		"age" => 20,
		"adopted" => true,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/miss-reads-a-lot.jpg", 
	]; 

	// $readsstory = "<p>" . $reads["name"] . " is " . $reads["age"] . " years old and her favourite food is " . $reads["favouriteFood"] . ". </p>"; 

	// echo $readsstory;

	$shadow = [
		"id" => "3575",
		"name" => "Shadow", 
		"favouriteFood" => "avocados",
		"age" => 45,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/shadow.jpg", 
	];

	// $shadowstory = "<p>" . $shadow["name"] . " is " . $shadow["age"] . " year old and his favourite food is " . $shadow["favouriteFood"] . ". </p>"; 

	// echo $shadowstory; 

	$fragoo = [
		"id" => "9435",
		"name" => "Fragoo", 
		"favouriteFood" => "chocolate bears",
		"age" => 19,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/fragoo.jpg", 
	]; 

	// $fragoostory = "<p>" . $fragoo["name"] .  " is " . $fragoo["age"] . " year old and his favourite food is " . $fragoo["favouriteFood"] . ". </p>"; 

	// echo $fragoostory; 

	$banana = [ 
		"id" => "1230",
		"name" => "Mr. Banana", 
		"favouriteFood" => "bananas",
		"age" => 32,
		"adopted" => true,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/mr-banana.jpg", 
	];

	// $bananastory = "<p>" . $banana["name"] . " is " . $banana["age"] . " year old and her favourite food is " . $banana["favouriteFood"] . ". </p>"; 

	// echo $bananastory; 

	$orangina = [
		"id" => "2355",
		"name" => "Orangina", 
		"favouriteFood" => "oranges",
		"age" => 88,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-5/lilian/projects/php-challenge/monsters/orangina.jpg", 
	];

	// $oranginastory = "<p>" . $orangina["name"] . " is " . $orangina["age"] . " year old and her favourite food is " . $orangina["favouriteFood"] . ".</p>"; 

	// echo $oranginastory;


	$bigmonsters = [$codey, $lima, $reads, $shadow, $fragoo, $banana, $orangina];  

	echo "<ul class='monster-list'>"; 

	echo "<h1 class='company-name'>Monster Adoption Service</h1>";

	echo "<p class='intro-paragraph'>Welcome to Monster Adoption Service. Monster Adoption Service is a well-organized intimate center with a limit of 15 at all times. All our monsters are socialized with humans (adults & children), other monsters and, of course, the resident cat! We would like to emphasize that, although our center is well organized and maintained for the comfort of our Adoptees, this is not where they are meant to be. Upon entering the center many animals are often confused, stressed and in some cases, badly undernourished. We need to make their transition to a regular environment as simple as possible. Although Animatch does its utmost to help alleviate most of the factors traumatizing the monsters, we are not the final solution. These monsters need permanent, understanding and loving homes. The sooner these monsters find their forever home, the easier it will be for them to adapt, accept and begin living normally again.</p>";

	foreach ($bigmonsters as $monster) {
		$name = $monster["name"]; 
		$id = $monster["id"]; 
		$story = "My favourite food are " . $monster["favouriteFood"] . " and I am " . $monster["age"] . " years old.";  
		$portrait = $monster["portrait"]; 
		$status = $monster["adopted"]; 

		if ($status == 1) {
			$status = "I have been adopted!"; 
		} else {
			$status = "I still need a loving home." . "<br>" . "<button class='adopt'>" . "Adopt Me" . "</button>"; 
		}
		echo "<li class='monster'>";

			echo 
				"<monster-card id='" . $id . "'>" .

					"<picture class='portrait'>" . 
						"<img src = '" . $portrait . "' width='200'>" . 

					"<h2 class='name'>" . $name . "</h2>" . 
				
					"<p class='story'>" . $story . "</p>" .
				
					"<p class='status'>" . $status . "</p>" . 

				"</monster-card>";

		echo "</li>";
	}
	echo "<button class='form'>" . "Next Step" . "</button>";
	echo "</ul>";
	
?>


<?php
	$post1[
		"title" => "This is the title", 
		"text" => "This is the description", 
		"image" => "This is the image", 
		"video" => "This is the video", 
		"link" => "This is the link", 
	];

	$post2[
		"title" => "This is the title", 
		"text" => "This is the description", 
		"image" => "This is the image", 
		"video" => "This is the video", 
		"link" => "This is the link", 
	];

	$posts = [$post1, $post2]; 

	foreach ($posts as $post) {
		$title = $post["title"]; 
		$text = $post["text"]; 
		$image = $post["image"]; 
		$video = $post["video"]; 
		$link = $post["link"]; 
	}

	echo "<ol>"
		echo "<li class='post'>";
			echo "<post-template>"; 
					"<h2 class='title'>" . $title . "</h2>" . 
					"<p class='text'>" . $text . "</p>" . 
					"<picture class='image'>" . $video . "</picture>" . 
					"<video class='video'>" . $link . "</video>" . 
				"<post-template>"; 
		echo "</li>"
	echo "</ol>"
?>




