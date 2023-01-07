<?php 
	$pageData = pageData(); 
	$pageId = "home"; 
	if (isset($_GET["page"]) ) {
		$pageId = $_GET["page"]; 
	}

?>



<site-map class='<?=$pageId?>'>
	<links>
		<div class='others'> 
			<li class="footer-item"><a href="?page=home" class='normal-voice'>Home</a></li>

			<li class="footer-item"><a href="?page=contact" class='normal-voice'>Contact</a></li>

			<li class="footer-item"><a href="?page=404" class='normal-voice'>404</a></li>

			<li class="footer-item"><a href="?page=style-guide" class='normal-voice'>Style Guide</a></li>

		</div>

		<div class="work-menu">
			<li class="footer-item"><a href="?page=projects" class='normal-voice'>Work </a></li>
			<li class="footer-item"><a href="?page=layouts" class='normal-voice'>Responsive Layout</a></li>
			<li class="footer-item"><a href="?page=exercises"  class='normal-voice'>Exercises for Programmers</a></li> 
		</div> 

		<div class="about-menu"> 
			<li class="footer-item"><a href="?page=about" class='normal-voice'>About</a></li>
			<li class="footer-item"><a href="?page=resume" class='normal-voice'>Resume </a></li>
			<li class="footer-item"><a href="?page=goals" class='normal-voice'>Goals</a></li>
		</div>


	
	</links>

	<social>
		<li><a href='https://www.linkedin.com/in/lilianhabib'><img src='https://www.peprojects.dev/alpha-5/lilian/images/linkedin.png' class='footer-logo'></a></li>
		<li><a href='https://github.com/lilianhabib'><img src='https://www.peprojects.dev/alpha-5/lilian/images/github.png' class='footer-logo'></a></li>

		<li><a href='https://lilianhabib.substack.com/'><img src='https://www.peprojects.dev/alpha-5/lilian/images/substack-logo.png' class='footer-logo'></a></li>
	</social>
</site-map>

