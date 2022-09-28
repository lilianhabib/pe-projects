	<head>
		<style> 
			h1{
				color: green;
			}
			h2{
				color: blueviolet;
			}
		</style>

	</head>

	<body> 
		<header>
			<h1>The MabLibs Challenge</h1>
		</header>

		<?php

			$adjectiveOne = "beautiful";
			$adjectiveTwo = "bewildered";
			$adjectiveThree = "fluffy";
			$personOne = "Lilian";
			$adjectiveFour = "teeny";
			$adjectiveFive = "dusty"; 
			$edVerb = "chased"; 
			$bodyPart = "arm"; 
			$ingVerb = "talking";
			$pluralNoun = "apples"; 
			$noun = "honey"; 
			$adverb = "awkwardly"; 
			$verbOne = "escape"; 
			$verbTwo = "crawl";
			$relative = "Chai"; 
			$personTwo = "Jess"; 
	
			echo "<p>" . "Dear " . $relative . ", I am having a " . $adjectiveOne . " time at camp." . " The counselor is " . $adjectiveTwo . " and the food is " . $adjectiveThree. ". I met " .  $personOne . " and we became " .  $adjectiveFour . " friends. Unfortunately, " . $personOne . " is " .  $adjectiveFive .  " and I " .  $edVerb . " my " . $bodyPart . " so we couldn`t go " .  $ingVerb . " like everybody else. I need more " . $pluralNoun . " and a " .  $noun . " sharpener, so please " .  $adverb .  " ". $verbOne .  " more when you " .  $verbTwo . " back. </p>";
		?>

		<?php
			$name = "Lilian";

			echo "<p> Hi, I am " . $name . "</p>"; 


			$cat = "Chai"; 

			echo "<p>" . $cat . " is a gray and " . $adjectiveThree . "</p>"; 
		?>

		<?php

			$cost = 50; 

			if ($cost == 50) {
				echo "lilian";
			} elseif ($cost > 50) {
				echo "chai";
			} else {
				echo "maybe"; 
			}
			

			$name = "Sun"; 

			if ($name == "Sun"){
				echo "Hello, Sun";
			} else {
				echo "Welcome"; 
			}


			$animal = "horse";

			if ($animal == "snake"){
				echo "Get it!"; 
			} else {
				echo "Maybe next time"; 
			}
		?>

		<?php
			$tip = 30; 

			if ($tip == 20) {
				echo "Thank you!";
			} elseif ($tip > 20) {
				echo "Wowza, What a tippa"; 
			} else {
				echo "Well, I did foget to bring them the food..."; 
			}
		?>

		<?php
			$weather = "snow"; 

			if ($weather == "rain"){
				echo "Stay inside!";
			} elseif ($weather == "sun"){
				echo "Let's go to the beach";
			} else {
				echo "Let's check the weather!"; 
			}
		?>
		
			<h2>Method 2</h2>
			<p>Dear <?=$relative?>, I am having a <?=$adjectiveOne?> time at camp. The counselor is <?=$adjectiveTwo?> and the food is <?=$adjectiveThree?>. I met <?=$personOne?> and we became <?=$adjectiveFour?> friends. Unfortunately, <?=$personOne?> is <?=$adjectiveFive?> and I <?=$edVerb?> my <?=$bodyPart?> so we couldn`t go <?=$ingVerb?> like everybody else. I need more <?=$pluralNoun?> and a <?=$noun?> sharpener, so please <?=$verbOne?> more when you <?=$verbTwo?> back.</p>

			<h2>Method 3</h2>
			<p>Dear <?php echo $relative;?>, I am having a <?php echo$adjectiveOne;?> time at camp. The counselor is <?php echo$adjectiveTwo;?> and the food is <?php echo $adjectiveThree;?>. I met <?php echo $personOne;?> and we became <?php echo$adjectiveFour;?> friends. Unfortunately, <?php echo$personOne;?> is <?php echo$adjectiveFive;?> and I <?php echo$edVerb;?> my <?php echo$bodyPart;?> so we couldn`t go <?php echo$ingVerb;?> like everybody else. I need more <?php echo$pluralNoun;?> and a <?php echo$noun;?> sharpener, so please <?php echo$verbOne;?> more when you <?php echo$verbTwo;?> back.</p>

			<h2>Paragraph</h2>
			<p>Hi, I am <?php echo $name;?>. I have cat name, <?php echo $cat; ?>. She is <?php echo $adjectiveThree; ?> and grey.</p>
			<p>Hi, I am <?=$name?>. I have a cat name, <?=$relative?>. She is <?=$adjectiveThree?> and grey.</p> 


			<?php
				$noun = "cat";
				$pluralNoun1 = "cups";
				$verb1 = "chasing";
				$verb2 = "running";
				$bodyPart = "legs";
				$adjective1 = "teeny";
				$pluralNoun2 = "keys";
				$adjective2 = "fluffy";
				$PHP = "PHP";
				
				echo "<p> Today, every student has a computer small enough to fit into their " .  $noun . ". You can solve any math problem by simply pushing the computer’s little " . $pluralNoun1 . ". Computers can add, multiply, divide, and " . $verb1 . ". They can also " . $verb2 . "better than a human. Some computers have their own. " . $bodyPart . " Other’s have a/an " . $adjective1 . " screen that shows all kinds of " . $pluralNoun2 . " and " . $adjective2 . " figures. </p>";
			?>
			

			<h2>Paragraph with <?= $PHP?></h2>
				<p>Today, every student has a computer small enough to fit into their <?=$noun?>. You can solve any math problem by simply pushing the computer’s little <?=$pluralNoun1?>. Computers can add, multiply, divide, and <?=$verb1?> (present tense). They can also <?=$verb2?>better than a human. Some computers have their own <?=$bodyPart?>. Other’s have a/an <?=$adjective1?> screen that shows all kinds of <?=$pluralNoun2?> and <?=$adjective2?> figures.</p>

			<h2>Paragraph with <?php echo$PHP;?></h2>
				<p>Today, every student has a computer small enough to fit into their <?php echo $noun;?>. You can solve any math problem by simply pushing the computer’s little <?php $pluralNoun1;?>. Computers can add, multiply, divide, and <?php echo$verb1;?>. They can also <?php echo$verb2?> better than a human. Some computers have their own <?php echo$bodyPart?>. Other’s have a/an <?php echo$adjective1?> screen that shows all kinds of <?php echo$pluralNoun2?> and <?php echo$adjective2?> figures.</p>




	
		<footer>	
			<!-- footer-->  
		</footer>
	</body>
</html>