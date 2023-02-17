










var thePages = {}


thePages.welcome = `

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
				<button data-to="instructions" class='login-btn small-voice'>Login</button> 
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

thePages.instructions = `

	<text-content class='instruction-text' id='instructions'> 

		<p id='text' class='text'>To build your own pizza, select a category from the menu below</p>
	
		<button id='next' class='next-btn'>Next</button>
	</text-content> 

	<div class='maker-button'> 
		<button data-to=''class='default-btn'>Save</button>
		<button data-to='' class='default-btn'>Undo</button>
		<button data-to='' class='default-btn'>Start Over</button>
	</div>


	<div class='instruction-container'>

		<div class='crust-container'> 
			<picture class='crust-item'>
				<img src='images/crust.svg'>  
			</picture> 
		</div> 

		<div class='topping-items'>
			<picture class='topping-logo' id='crust'>
				<img src='images/crust-logo.svg'>
			</picture> 
			<picture class='topping-logo' id='sauce'>
				<img src='images/sauce-logo.svg'>
			</picture> 
			<picture class='topping-logo' id='cheese'>
				<img src='images/cheese-logo.svg'>
			</picture> 
			<picture class='topping-logo' id='meat'>
				<img src='images/meat-logo.svg'>
			</picture>
			<picture class='topping-logo' id='veggies'>
				<img src='images/veggies-logo.svg'>
			</picture>  
		</div>

	</div>




	`





thePages.maker = `THIS IS THE MAKER PAGE`;




export default thePages; 








//to get the instructions up 


		// const nextBtn = document.querySelector('#next');
		// const text = document.querySelector('#text');
		// const instruction = document.querySelector('#instructions');

		
		// var index = 0 

		// nextBtn.addEventListener('click', function() {
			
		// 	var nextStep = instructionItems[index];
		
		// 		text.innerHTML = nextStep.text;
		// 		index++; 
				
		
		// });






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


	<div class='instruction-overlay' id='instructions'> 

		<p id='text' class='text'>To build your own pizza, select a category from the menu below</p>

		<button id='next' class='next-btn'>Next</button>
	</div> 

	<div class='maker-container'> 
		
		<div class='maker-button'> 
			<button data-to=''class='default-btn'>Save</button>
			<button data-to='' class='default-btn'>Undo</button>
			<button data-to='maker' class='default-btn'>Start Over</button>
		</div>


		<div class='pizza-container'>

			<div class='crust-container'> 

				<picture class='crust-item' id="crust1">
					<img src='images/crust.svg'>  
				</picture> 
				// <picture class='crust-item' id="crust2">
				// 	<img src='images/crust2.svg'>  
				// </picture> 
			</div> 

			

			<div class='topping-items'> 

				<div class='topping-options'> 

					<output id='toppings' class='topping-output'></output> 
				</div>

				<div class='topping-btn'> 
					<button data-to='crust' id='crust-btn'>

						<picture class='topping-logo' id='crust'>
							<img src='images/crust-logo.svg'>
						</picture> 
					</button> 

					<button data-to='sauce'> 
						<picture class='topping-logo' id='sauce'>
							<img src='images/sauce-logo.svg'>
						</picture> 
					</button> 

					<button data-to='cheese'> 
						<picture class='topping-logo' id='cheese'>
							<img src='images/cheese-logo.svg'>
						</picture> 
					</button> 

					<button data-to='meat'> 
						<picture class='topping-logo' id='meat'>
							<img src='images/meat-logo.svg'>
						</picture>
					</button> 

					<button data-to='veggies'> 
						<picture class='topping-logo' id='veggies'>
							<img src='images/veggies-logo.svg'>
						</picture>  
					</button> 
				</div>
			</div>

		</div>
	</div>

`

thePages.crust = `CRUST POPUP`;

thePages.sauce = `CRUST POPUP`;

thePages.cheese = `CRUST POPUP`;

thePages.meat = `CRUST POPUP`;

thePages.veggies = `CRUST POPUP`;

export default thePages; 





//chageTo.js -button 

		var crustBtn = document.querySelector('#crust-btn');
		var toppings = document.querySelector('#toppings');
		var li = document.createElement('li');
		var img = document.createElement('img');
		var picture = document.createElement('picture');
		var crustText = crust.text
		let currentIndex = 0; 


		crustBtn.addEventListener("click", function() {
			crust.forEach(crust => {
				const li = document.createElement('li');
				const img = document.createElement('img');
				const picture = document.createElement('picture');
				picture.classList.add('topping-img')
				img.classList.add('topping');
				li.classList.add('list-crust');
				img.src = `images/${crust.image}`;
				img.draggable = "true";
				picture.appendChild(img);
				li.appendChild(picture);
				toppings.appendChild(li);

				var topping = crust[currentIndex];
				while (currentIndex < crust.length -1 ) {
					if (crust.length == 2 ) {
						break;;
					}
					// currentIndex++;
				}








	if ( event.target.matches("[data-to='maker']") ) {

		// what do I want to happen?
		// when the login button is clicked, the maker page will dim
		// a few seconds after, the first set of instructions will appear on the maker screen

		// I am able to click the next button to see the next set of instructions 

		// setTimeout( function () {
		// 	document.querySelector('.maker-button').classList.add('btn-dimmer');
		// 	setTimeout(function() {
		// 		document.querySelector('.crust-container').classList.add('crust-dimmer');
		// 		setTimeout( function() {
		// 			document.querySelector('.instruction-overlay').classList.add('disappear');
		// 		}, 0);
		// 		setTimeout( function() {
		// 			document.querySelector('.instruction-overlay').classList.add('appear');
		// 					const nextBtn = document.querySelector('#next');
		// 					const text = document.querySelector('#text');

		// 					let index = 0;
		// 					//start at 0

		// 					nextBtn.addEventListener('click', function() {
		// 						//when nextBtn is clicked 

		// 						var nextStep = instructionItems[index];
		// 						//assign nextStep to instructionItems[index]
								
		// 						text.innerHTML = nextStep.text;
		// 						//set text innerHTMl to the index text

		// 						console.log(nextStep);

		// 						while (index < instructionItems.length - 1) {
		// 							// loop through the array items but do not exceed the length of the array minus 1 

		// 							index++;
		// 							//increment 1 each time but not exceed the lgnth of the array 

		// 							if (instructionItems.length  === 4) {
		// 								break
		// 							}
		// 							// check if the index is greater than the length then go to the maker page 
		// 							//instructions key:.last = true. use if statement to check it 

									

									
							
		// 						};


		// 				});

		// 		}, 500)
		// 	}, 0)
			
		// }, 0)

		//crust have an id and if the id matches the selected then it will be shown otherwise display none 

		//

					<button data-options='crust' id='crust-btn'> Crust
						<picture class='topping-logo' id='crust'>
							<img src='images/crust-logo.svg'>
						</picture> 
					</button> 

					<button data-options='sauce'> Sauce
						<picture class='topping-logo' id='sauce'>
							<img src='images/sauce-logo.svg'>
						</picture> 
					</button> 

					<button data-options='cheese'> Cheese
						<picture class='topping-logo' id='cheese'>
							<img src='images/cheese-logo.svg'>
						</picture> 
					</button> 

					<button data-options='meat'> Meat
						<picture class='topping-logo' id='meat'>
							<img src='images/meat-logo.svg'>
						</picture>
					</button> 

					<button data-options='veggies'> Veggies 
						<picture class='topping-logo' id='veggies'>
							<img src='images/veggies-logo.svg'>
						</picture>  
					</button> 



					
.maker-container {
    border: 2px solid lightgreen;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    justify-content: space-between;
    place-items: center;
    height: 100%;
    width: 100%;
}

.pizza-container {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    justify-content: space-between;
    place-items: center;
    margin-left: auto;
    margin-right: auto;
    height: 90%;
}





