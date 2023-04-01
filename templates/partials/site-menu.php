<?php


?>

<nav class="site-menu">
	<!-- <button rel='toggle' class='menu-open'>Toggle Menu</button> -->

	<ul class="menu-list">

		<li class="menu-item"><a href="">Home</a></li>
		<li class="menu-item"><a href="/works">Work </a></li>
		<li class="menu-item"><a href="/about">About</a></li>
		<li class="menu-item"><a href="/contact">Contact</a></li>
	<!-- 	<button class='toggle'></button> -->

	</ul>
<!-- 
	<button rel='toggle' class='menu-toggle'>Close menu</button> -->

	<script>
		var body = document.querySelector('body');

		body.addEventListener('click', function(event){
			if (event.target.matches('[rel="toggle"]') ) {
				body.classList.toggle('menu-open');
			}
		});
	</script>
</nav>



