var thePages = {}

// thePages.setUp = `
// 	<div class="welcome-overlay" >
// 		<button data-to='intro' class='startBtn'>Click to Start</button>

// 		<div class="pizza">	
// 			<img src='images/loading-pizza.svg'>
// 		</div>
// 	</div>
// `;

thePages.intro = `

	<div class='welcome-content'>
		<text-content>
			<h1 class='loud-voice'>Pizza Crafter</h1>
			<p class='intro-voice'>Who's hungry? Make delectable pizzas for your guests using this interactive pizza game!</p>
		</text-content>
		
		<div class='welcome-container'>
			<button data-to="login" class='login-btn small-voice'>Login</button> 
		</div>
	</div>
`;

thePages.login = `
	<div class='login-content'>
	
		<text-content>
			<h1 class='loud-voice'>Pizza Crafter</h1>
		</text-content>

		<form data-action='login' class='login-form'>
			<div class='fields'> 
				<label class='label-voice'>Username</label>
				<input type='text' class='input-text'>
			</div> 

			<div class='login-btn-container'>
				
				<button data-to="maker" class='start small-voice'>Start
				</button> 
			</div>

			<button data-to="account" class='teeny-voice account-btn'>Create an account</button>
		</form>
	</div>

`;

thePages.account = `
	<div class='account-content'>
		<text-content>
			<h1 class='loud-voice'>Pizza Crafter</h1>
		</text-content>

		<form method='POST'>
			<div class='fields a'> 
				<label class='label-voice'>Full Name</label>
				<input type='text' class='input-text'>
			</div> 


			<div class='fields b'> 
				<label class='label-voice'>Email Address</label>
				<input type='text' class='input-text'>
			</div>

			<div class='fields c'> 
				<label class='label-voice'>Phone Number</label>
				<input type='text' class='input-text'>
			</div>

			<div class='fields d'> 
				<label class='label-voice'>Username</label>
				<input type='text' class='input-text'>
			</div>

			<div class='fields e'> 
				<label class='label-voice'>Password</label>
				<input type='text' class='input-text'>
			</div>

			<div class='account-btn-container f'>
				<button data-to="login" class='create-btn small-voice'>Create Account</button> 
			</div>
		</form>
	</div>


`;


		// <div class='save-overlay' id='save'> 

		// 	<p id='save-text' class='save-text'>Saved!</p>

		// 	<button id='x-btn' class='x-btn'>X</button>
		// </div> 

thePages.maker = `

	<div class='instruction-overlay' id='instructions'> 

		<p id='text' class='text'>To build your own pizza, select a category from the menu below</p>

		<button id='next' class='next-btn'>Next</button>
	</div> 

	<div class='maker-container'> 
		
		<div class='maker-button'> 
			
			<button id='start-btn' class='default-btn'>Start Over
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

				<nav>
					<ul data-outlet='choices' class='option-list'>
					</ul>
				</nav>
				
				<nav>
					<button data-options='crust' class='top-btn'>
						<picture class='topping-logo' id='crust'>
							<img src='images/crust-logo.svg'>
						</picture> 
					</button> 

					<button data-options='sauce' class='top-btn'>
						<picture class='topping-logo' id='sauce'>
							<img src='images/sauce-logo.svg'>
						</picture> 
					</button> 

					<button data-options='cheese' class='top-btn'>
						<picture class='topping-logo' id='cheese'>
							<img src='images/cheese-logo.svg'>
						</picture> 
					</button> 

					<button data-options='meat' class='top-btn'>
						<picture class='topping-logo' id='meat'>
							<img src='images/meat-logo.svg'>
						</picture>
					</button> 

					<button data-options='veggies' class='top-btn'>
						<picture class='topping-logo' id='veggies'>
							<img src='images/veggies-logo.svg'>
						</picture>  
					</button> 
				</nav>
			</div>

		</div>
	</div>

`;

thePages.save = `

	

`

export default thePages; 




