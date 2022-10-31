<html> 
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
		
			<h2>Method 2</h2>
			<p>Dear <?=$relative?>, I am having a <?=$adjectiveOne?> time at camp. The counselor is <?=$adjectiveTwo?> and the food is <?=$adjectiveThree?>. I met <?=$personOne?> and we became <?=$adjectiveFour?> friends. Unfortunately, <?=$personOne?> is <?=$adjectiveFive?> and I <?=$edVerb?> my <?=$bodyPart?> so we couldn`t go <?=$ingVerb?> like everybody else. I need more <?=$pluralNoun?> and a <?=$noun?> sharpener, so please <?=$verbOne?> more when you <?=$verbTwo?> back.</p>

			<h2>Method 3</h2>
			<p>Dear <?php echo $relative;?>, I am having a <?php echo$adjectiveOne;?> time at camp. The counselor is <?php echo$adjectiveTwo;?> and the food is <?php echo $adjectiveThree;?>. I met <?php echo $personOne;?> and we became <?php echo$adjectiveFour;?> friends. Unfortunately, <?php echo$personOne;?> is <?php echo$adjectiveFive;?> and I <?php echo$edVerb;?> my <?php echo$bodyPart;?> so we couldn`t go <?php echo$ingVerb;?> like everybody else. I need more <?php echo$pluralNoun;?> and a <?php echo$noun;?> sharpener, so please <?php echo$verbOne;?> more when you <?php echo$verbTwo;?> back.</p>


		<footer>
			<!-- footer-->  
		</footer>
	</body>
</html>