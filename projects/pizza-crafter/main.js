

import { $mainView, 
	changeTo,
	welcomeOverlay,
	makeDimmer,
	instructionOverlay,
	buildToppingList,
	updatePizza,
	updateSelection,
	selected,
	btnState,
	clearSelection,
	// startOver, 
	addCrust,
	setupWelcome,
	login,
	 } from './changeTo.js'

import  instructionItems  from './instructions-steps.js';

import { toppingOptions }  from './topping.js';



window.addEventListener('submit', function(event) {
	

	if (event.target.matches('[data-action="login"]') ) {
		event.preventDefault(); 
 		var $username = event.target.querySelector('input');
 		console.log($username);
 		login($username.value);

 		$username.value = ""; 
 		makeDimmer(); 
		instructionOverlay();
		addCrust();
		clearSelection();
	}
})


window.addEventListener('click', function(event) {
	const { target: clicked } = event;
	const data = clicked.dataset; 

	// event.preventDefault();

	if (event.target.matches('[data-to]') ) {
		changeTo(event.target.dataset.to);

	};




	if ( event.target.matches("[data-to='intro']") ) {
		welcomeOverlay(); 

	}

	if (event.target.matches('[data-to="login"]') ) {

	}

	if (event.target.matches('[data-to="maker"]') ){
		buildToppingList(toppingOptions);
		
	}



	if (clicked.matches('[data-options]')) {
		var $optionsOutlet = document.querySelector("[data-outlet='choices']");

		btnState.openOptions = data.options; 
		// console.log(data.options);
		$optionsOutlet.innerHTML = buildToppingList( toppingOptions[btnState.openOptions] );
	};

	if (event.target.matches("[data-name]")) {
		updateSelection(event.target);
		updatePizza(selected);
		console.clear();
		console.log('selected', selected);
	};


});



