import thePages from './thePages.js';
import instructionItems from './instructions-steps.js';
import { toppingOptions }  from './topping.js';


const $mainView = document.querySelector('[data-outlet="main"]');


function changeTo(view) {

	console.log('change screen to', view);
	$mainView.innerHTML = thePages[view];
};




window.addEventListener('click', function(event) {

	if ( event.target.matches("[data-to='intro']") ) {

		setTimeout( function() {
			document.querySelector('.welcome-overlay').classList.add('loading');
			setTimeout( function() {
				document.querySelector('.welcome-overlay').classList.add('away');
				changeTo( event.target.dataset.to ); // "login"
			}, 500);
		}, 500);
	}


	if (event.target.matches('[data-to]') ) {
		changeTo(event.target.dataset.to);
		};

	if ( event.target.matches("[data-to='maker']") ) {

		setTimeout( function () {
			document.querySelector('.maker-button').classList.add('btn-dimmer');
			setTimeout(function() {
				document.querySelector('.crust-container').classList.add('crust-dimmer');
				setTimeout( function() {
					document.querySelector('.instruction-overlay').classList.add('disappear');
				}, 0);


				setTimeout( function() {
					document.querySelector('.instruction-overlay').classList.add('appear');
						const nextBtn = document.querySelector('#next');
						const text = document.querySelector('#text');

						let index = 0;
						//start at 0

						nextBtn.addEventListener('click', function() {
						

							var nextStep = instructionItems[index];

							if (nextStep.key === true ) {
								document.querySelector('.instruction-overlay').classList.add('gone');
								document.querySelector('.crust-container').classList.add('show');
								document.querySelector('.maker-button').classList.add('see');
							}
							
							text.innerHTML = nextStep.text;

							while (index < instructionItems.length - 1) {
								
								index++;

								if (instructionItems.length  === 5) {
									break
								}

						
							};

						});

				}, 500);

			}, 0);

			
		}, 0);

		setTimeout( function() {
			document.querySelector('.save-overlay').classList.add('save-disappear');
			
			var saveBtn = document.querySelector('#save-btn')
			saveBtn.addEventListener('click', function () {
				document.querySelector('.save-overlay').classList.add('save-appear');
				document.querySelector('.crust-container').classList.add('crust-dimmer2');
				document.querySelector('.maker-button').classList.add('btn-dimmer2');
				document.querySelector('.topping-items').classList.add('topping-dimmer');

			})
		
		}, 0);


			var xBtn = document.querySelector('#x-btn');
			xBtn.addEventListener('click', function() {
				console.log("THIS WORKS)")

				document.querySelector('#save').classList.add('save-none');
				document.querySelector('.crust-container').classList.add('crust-bright');
				document.querySelector('.maker-button').classList.add('btn-bright');
				document.querySelector('.topping-items').classList.add('topping-bright');

			})




		//when i click the x button, I want the saved popup to disappear and the opacity to disppear 




		//when the whole wheat crust is selected, the crust will appear on screen. 
		// crust have an id and if the id matches the selected then it will be shown otherwise display none 

	};




	var btnState = {
		openOptions: null, 
	}

	function buildToppingList(toppingOptions) {
		var template = ""; 

		toppingOptions.forEach( function(item) {
			template += `

				<div class='topping-list' id='list'>
					
					<p class='topping-name teeny-voice'>${item.name}</p> 
					<picture class='topping-img' id='list-img' draggable='true'> 
						<img src='${item.image}'>
					<picture> 

				</div> 
			`;
		});
		return template; 
	}

	window.addEventListener('click', function(event) {
		const { target: clicked } = event;
		const data = clicked.dataset; 

		if (clicked.matches('[data-options]')) {
			var $optionsOutlet = document.querySelector("[data-outlet='choices']");
			btnState.openOptions = data.options; 
			$optionsOutlet.innerHTML = buildToppingList( toppingOptions[btnState.openOptions] );


		};

	});


});


export {
	$mainView, 
	changeTo,

}