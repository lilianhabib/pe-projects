



<!doctype html>

<html lang='en'>
	<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>Natural Skin</title>
	<meta name='description' content='Natural Skin is a natural skin care brand that ethically source its ingredients from local farms in BC. Each product is carefully curated for you. Take the skin quiz to determine what you need for healthy beautiful skin.'>
	<meta property='og:image' content='https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/welcome.jpg'>

	<link rel="icon" type="image/x-icon" href="https://peprojects.dev/alpha-5/lilian/pe-projects/theme-challenge/images/logo.png">



	<link rel='stylesheet' href='../css/style.css'>
</head>


	<body>

			<?php include ('banner.php'); ?>

			<header class='site-header'>
		
				<inner-column>

					<mast-head>

						<nav class='site-menu'>
							<a class='logo' href='#'>
								<img src="../images/logo.png" alt="">
								<!-- or you could actually use the SVG -->
							</a>

							<a href='../index.php' class='nav-link'>
								<span>Home</span>
							</a>

							<a href='quiz.php' class='nav-link'>
								<span>Skin Quiz</span>
							</a>
						</nav>


						<nav class='user-menu'>
							<a href='?page=signin'>
								<img src='../images/login.png'>
								<!-- <span>Sign-in</span> -->
							</a>
						</nav>

					</mast-head>


				</inner-column>
			</header>


			<main class='page-content'>

					<graphic-diptych-quiz class="welcome-quiz">
						<inner-column>

						<text-content>
							<h1 class='intro-voice'>Skin Quiz</h1>

							<p class='calm-voice'>Take our skin quiz to find a skin care routine that works perfect for you!</p>
						</text-content>

						</inner-column>

					</graphic-diptych-quiz>

					<skin-quiz> 
						<inner-column> 

						<?php include ('quiz-form.php'); ?>
						</inner-column>
					</skin-quiz>
			</main>
	</body>
</html>	


















