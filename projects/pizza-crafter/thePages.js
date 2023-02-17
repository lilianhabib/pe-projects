var thePages = {}


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

		<form method='POST'>
			<div class='fields'> 
				<label class='label-voice'>Username</label>
				<input type='text' class='input-text'>
			</div> 

			<div class='fields'> 
				<label class='label-voice'>Password</label>
				<input type='text' class='input-text'>
			</div>

			<div class='login-btn-container'>
				<button data-to="maker" class='login-btn small-voice'>Login</button> 
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


thePages.maker = `



	<div class='maker-container'> 

		<div class='instruction-overlay' id='instructions'> 

			<p id='text' class='text'>To build your own pizza, select a category from the menu below</p>

			<button id='next' class='next-btn'>Next</button>
		</div> 

		
		<div class='save-overlay' id='save'> 

			<p id='save-text' class='save-text'>Saved!</p>

			<button id='x-btn' class='x-btn'>X</button>
		</div> 

		
		<div class='maker-button'> 
			<button class='save-btn' id='save-btn'>Save</button>
			
			<button data-to='' class='default-btn'>Undo</button>
			
			<button data-to='maker' class='default-btn'>Start Over</button>
		</div>


		<div class='pizza-container'>

			<div class='crust-container'> 
				<picture class='crust-item' id="crust">
					<img src='images/crust.svg'>  
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

// thePages.save = `

// 	<div class='save-overlay' id='save'> 

// 		<p id='save-text' class='save-text'>Saved!</p>

// 		<button id='x-btn' class='x-btn'>X</button>
// 	</div> 

// `

export default thePages; 




