

<?php 
	include('header.php'); 
?>


<body> 
	<header>
		<section>
			<div>
				<h1>Welcome</h1>
			
				<nav>
					<a href='index.html'>Home</a>
					<a href='about.html'>About</a>
					<a href='contact.html'>Contact</a>
				</nav>
			</div>
		</section>
	</header>

	<main> 
	<section class='hello-container'> 
		<div> 
			<h2>Hello!</h2>
		</div>
		<div>
			<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSNBYBaKYAqk6Wb3JaN4nLNyRIk_AADTE8vw&usqp=CAU'>
		</div>				
	</section>

	<section class='about-container'> 
		<div> 
			<h2>About</h2>
				<p>I'm Lilian, and I am an aspiring developer.</p>
		</div>

		<div class='button-container'>
			<button><a href='about.html'>Read more</a></button>
		</div>
	</section>

	<section class='contact-container'> 
		<div>
			<h2>Contact</h2>
				<p>More questions? Ask away.</p>
		<div class='button-container'>
			<button><a href='contact.html'>Read more</a></button>
		</div>
	</section>
	</main> 

<?php 
	include('footer.php'); 
?>
