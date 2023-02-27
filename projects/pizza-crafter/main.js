

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
	login,
	username,
	saveBtn,
	signOut,
	 } from './changeTo.js'

import  instructionItems  from './instructions-steps.js';

import { toppingOptions }  from './topping.js';



window.addEventListener('submit', function(event) {


	if (event.target.matches('[data-action="login"]') ) {
		event.preventDefault(); 
 		var $username = event.target.querySelector('input');

 		login($username.value);

 		$username.value = ""; 
 		makeDimmer(); 
		instructionOverlay();
		addCrust();
		clearSelection();
		saveBtn(selected);
		signOut();
		username();
	}
})



window.addEventListener('click', function(event) {


	const { target: clicked } = event;
	const data = clicked.dataset; 

	

	if (event.target.matches('[data-to]') ) {
		changeTo(event.target.dataset.to);
	};




	if ( event.target.matches("[data-to='intro']") ) {
		welcomeOverlay(); 

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
	
		// console.log('selected', selected);
	};


});



