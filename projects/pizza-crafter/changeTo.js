import thePages from './thePages.js';
import instructionItems from './instructions-steps.js';
import { toppingOptions }  from './topping.js';



const $mainView = document.querySelector('[data-outlet="main"]');


function changeTo(view) {
	console.log('change screen to', view);
	$mainView.innerHTML = thePages[view];
};

function getData (storageKey) {
	return JSON.parse( localStorage.getItem(storageKey) )
}

function setData (storageKey, valueToSave) {
	localStorage.setItem(storageKey, JSON.stringify(valueToSave))
}


function login(username) {
	if (username.length >= 3) {
		setData('user', username); 
		changeTo('maker');
	} else {
		alert("Username must be 3 or more characters.")
	}

}





// function setupWelcome() {
// 	var template = `
		
// 		<div class="welcome-overlay" >
// 			<button data-to='intro' class='startBtn'>Click to Start</button>

// 			<div class="pizza">	
// 				<img src='images/loading-pizza.svg'>
// 			</div>
// 		</div>

// 	`;

// 	document.querySelector('main').innerHTML = template;

// }



function welcomeOverlay() {
	setTimeout( function() {
		document.querySelector('.welcome-overlay').classList.add('loading');
		setTimeout( function() {
			document.querySelector('.welcome-overlay').classList.add('away');
		}, 2000);
	}, 500);

}


function makeDimmer() {
	document.querySelector('.maker-button').classList.add('btn-dimmer');
		
	document.querySelector('.crust-container').classList.add('crust-dimmer');
			
	document.querySelector('.instruction-overlay').classList.add('disappear');	

}; 

function instructionOverlay() {
	setTimeout( function() {
		document.querySelector('.instruction-overlay').classList.add('appear');
			const nextBtn = document.querySelector('#next');
			const startBtn = document.querySelector('#start-btn');
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


}





var btnState = {
		openOptions: null, 
	}

function buildToppingList(toppingOptions) {
	var template = "";
	
	// const toppingArr = Array.from(toppingOptions)
	
	toppingOptions.forEach( function(item) {
		template += `
			
		<button class='topping-btn' id='list' data-name='${item.id}'>
			<span class='topping-item'>
				<p class='topping-name teeny-voice'>${item.name}</p> 
				<picture class='topping-img' id='list-img'> 
					<img src='${item.image}'>
				<picture> 
			</span>

		</button> 
	`;
	});
	return template; 
}


console.clear();

var selected = ['w-crust'];


function addCrust() {
	var wCrustBtn = document.querySelector("#w-crust").classList.add('w-crustShow');
		var $pizzaOutlet = document.querySelector('[data-outlet="pizza"]');

	if (selected.includes(wCrustBtn)) {
		wCrustBtn.style.display = 'block';
		
	}
}


function updatePizza(currentOptions) {
	var layers = document.querySelectorAll('[data-layer]');
	var wCrustBtn = document.querySelector("#w-crust")
	layers.forEach( function(layer) {
		var name = layer.dataset.layer;
		if (currentOptions.includes(name)) {
			layer.style.display = "block";
		} else {
			layer.style.display = "none";
		}
	})
}


function updateSelection(button) {
	var clickedName = button.dataset.name;
	if (selected.includes(clickedName)) {
		var index = selected.indexOf(clickedName);
		selected.splice(index, 1);

	} else {

		selected.push(clickedName)	

	}
}



function saveBtn() {
	var save = document.querySelector('#save-btn');
	var appPrefix = getData('user');

	// when save btn is clicked 
	save.addEventListener('click', function(array) {
		var randomKey = Math.random().toString(36).substring(2);
		setData(`${appPrefix}_${randomKey}`, selected);
		
	})
}

function username(username) {	

	var headerUser = document.querySelector('#header-user')
	var getUsername = getData('user')

	headerUser.innerHTML = `Hello, ${getUsername}!`;
}


function signOut() {
	var signOut = document.querySelector('#signOut-btn')
	var headerUser = document.querySelector('#header-user')


	signOut.addEventListener('click', function() {
		localStorage.removeItem('user');
		changeTo('intro')
		headerUser.innerHTML = '';
	})
}


function clearSelection(currentOptions) {
	var startBtn = document.querySelector('#start-btn');
	var $pizzaOutlet = document.querySelector('[data-outlet="pizza"]');
	var layers = document.querySelectorAll('[data-layer]');

	
	startBtn.addEventListener('click', function(){
		document.querySelector('.instruction-overlay').classList.add('no-show');
		
		layers.forEach( function(layer) {
			
			layer.style.display = "none";
			selected = [];
			
			
		
		});	 
			
	});

};

// function backgroundColorChange() {
// 	document.querySelector('[data-outlet="main"]').classList.add('main-background');
// 	document.querySelector('#start-btn');


// }







export {
	$mainView,
	toppingOptions, 
	changeTo,
	selected,
	welcomeOverlay,
	makeDimmer,
	instructionOverlay,
	buildToppingList,
	updatePizza,
	updateSelection,
	btnState,
	clearSelection, 
	addCrust,
	login,
	username,
	saveBtn,
	signOut,


}