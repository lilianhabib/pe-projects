var thePages = {}


thePages.intro = `

	<div class='welcome-content'>
		<text-content>
			<h1 class='loud-voice'>Pizza Crafter</h1>
			<p class='intro-voice'>Who's hungry? Make delectable pizzas for your guests using this interactive pizza game!</p>
		</text-content>
		
		<div class='welcome-container'>
			<button type='button' data-to="login" class='login-btn small-voice'>Login</button> 
		</div>
	</div>
`;

thePages.login = `
	<div class='login-content'>

		<h1 class='loud-voice'>Pizza Crafter</h1>

		<form class='login' data-action='login'>
			<form-field>
				<input type='text' class='input-text'/>
			</form-field>
			
			<button type='submit' id='standard' class='standard'>
				>
			</button>
				
		</form>
	</div>
`;


thePages.maker = `

	<div class='instruction-overlay' id='instructions'> 

		<p id='text' class='text'>To build your own pizza, select a category from the menu below</p>

		<button id='next' class='next-btn'>Next</button>
	</div> 

	<div class='maker-container'> 
		
		<div class='maker-button'> 
			
			<button id='start-btn' class='default-btn'>Start Over
			</button>

			<button id='save-btn' class='save-btn'>Save
			</button>

			<button id='signOut-btn' class='signOut-btn'>Sign Out
			</button>

		</div>


		<div class='pizza-container'>

			<div class='crust-container' data-outlet='pizza'> 
				
				<picture data-layer='w-crust' id="w-crust">
					<img src='images/t-w-crust.svg'>  
				</picture> 

				<picture data-layer='ww-crust' id="ww-crust" required>
					<img src='images/t-ww-crust.svg'>  
				</picture> 

				<picture data-layer='pesto-sauce'  id="pesto-sauce">
					<img src='images/t-pesto-sauce.svg'>  
				</picture> 

				<picture data-layer='tomato-sauce' id="tomato-sauce">
					<img src='images/t-tomato-sauce.svg'> 
				</picture> 

				<picture data-layer='bacon' class='bacon' id="bacon">
					<img src='images/t-bacon.svg'>  
				</picture> 

				<picture data-layer='cheddar' id="cheddar">
					<img src='images/t-cheddar.svg'>  
				</picture> 

				<picture data-layer='chicken' id="chicken">
					<img src='images/t-chicken.svg'>  
				</picture> 

				<picture data-layer='feta' id="feta">
					<img src='images/t-feta.svg'>  
				</picture> 

				<picture data-layer='ham' id="ham">
					<img src='images/t-ham.svg'>  
				</picture> 

				<picture data-layer='mixed' id="mixed">
					<img src='images/t-mixed.svg'>  
				</picture> 

				<picture data-layer='mozzarella' id="mozzarella">
					<img src='images/t-mozzarella.svg'>  
				</picture> 

				<picture data-layer='mushroom' id="mushroom">
					<img src='images/t-mushroom.svg'>  
				</picture> 

				<picture data-layer='olives'  id="olives">
					<img src='images/t-olives.svg'>  
				</picture> 

				<picture data-layer='pepperoni' id="pepperoni">
					<img src='images/t-pepperoni.svg'>  
				</picture> 

				<picture data-layer='peppers' id="peppers">
					<img src='images/t-peppers.svg'>  
				</picture> 

				<picture data-layer='pineapple' id="pineapple">
					<img src='images/t-pineapple.svg'>  
				</picture> 

				<picture data-layer='sausage' id="sausage">
					<img src='images/t-sausage.svg'>  
				</picture> 

				<picture data-layer='sliced-moz' id="sliced-moz">
					<img src='images/t-sliced-moz.svg'>  
				</picture> 

				<picture data-layer='tomatoes' id="tomatoes">
					<img src='images/t-tomatoes.svg'>  
				</picture> 

			</div> 

			

			<div class='topping-items'> 

				<nav class='outlet-choices'>
					<ul data-outlet='choices' class='option-list'>
					</ul>
				</nav>
				
				<nav class='topping-list'>
					<button data-options='crust' class='top-btn'>
						<span class='img-container'>
							<picture class='topping-logo' id='crust'>
								<img src='images/crust-logo.svg'>
							</picture> 
						</span>
					</button> 

					<button data-options='sauce' class='top-btn'>
						<span class='img-container'>
							<picture class='topping-logo' id='sauce'>
								<img src='images/sauce-logo.svg'>
							</picture> 
						</span>
					</button> 

					<button data-options='cheese' class='top-btn'>
						<span class='img-container'>
							<picture class='topping-logo' id='cheese'>
								<img src='images/cheese-logo.svg'>
							</picture> 
						</span>
					</button> 

					<button data-options='meat' class='top-btn'>
						<span class='img-container'>
							<picture class='topping-logo' id='meat'>
								<img src='images/meat-logo.svg'>
							</picture>
						</span>
					</button> 

					<button data-options='veggies' class='top-btn'>
						<span class='img-container'>
							<picture class='topping-logo' id='veggies'>
								<img src='images/veggies-logo.svg'>
							</picture>  
						</span>
					</button> 
				</nav>
			</div>

		</div>
	</div>

`;


export default thePages; 




