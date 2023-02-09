<?php 
	$json = file_get_contents('data/footer-data.json');
	$footerData = json_decode($json, true); 

?>
<site-map>

	<links>

		<footer-item>

			<?php foreach ($footerData as $footerInfo) {
				$heading = $footerInfo["heading"];
				$class = $footerInfo["class"];
			?>


				<div class="category <?=$class?>"> 
					<h3 class='tiny-voice'><?=$heading?></h3>

					<?php foreach($footerInfo["components"] as $footerCopy) {
						$copy = $footerCopy["copy"]; 
						$link = $footerCopy["link"]; 
				
						?>

						<list-item class="<?=$class?>"> 
							<a href="<?=$link?>" class='text detail-voice'><?=$copy?></a>

						</list-item>

					<?php } ?>
				</div>

			<?php } ?>


			<div class='d'>

				<h3 class='tiny-voice'>Subscribe</h3>
				<form> 
					<div class='field'> 
						<input type='email' placeholder='Email Address' class='input'>
						<button type='submit' class='button'>></button>
					</div>

					<p class='text detail-voice'>Gravida sed justo, justo, id est et. Amet tristique convallis sed porttitor nullam eu ut. Duis et odio aliquam bibendum. Metus et lectus id viverra fringilla magna morbi.</p>

				</form>
			</div>



				<div class='logo'>
					<picture class='e'> 
						<img src='images/wireframe-logo-white.svg'> 
					</picture>
				</div>

				<div class='legal'> 

					<ul class='f'>
						<li class='legal-item'><a href='#'>Terms</a></li>
						<li class='legal-item'><a href='#'>Privacy</a></li>
						<li class='legal-item'><a href='#'>Cookies</a></li>
					</ul> 
				</div>

				<div class='socials'> 

					<ul class='g'>
						<li><a href='#'><img src='images/in.svg'></a></li>
						<li><a href='#'><img src='images/facebook.svg'></a></li>
						<li><a href='#'><img src='images/social-icon.svg'></a></li>

					</ul> 
				</div>
			</section>


		</footer-item>

	</links>

</site-map>

