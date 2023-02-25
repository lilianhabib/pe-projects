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
	if (username.length >= 5) {
		setData('user', username); 

	} else {
		alert("test test test")
	}


}



function setupWelcome() {
	var template = `
		
		<div class="welcome-overlay" >
			<button data-to='intro' class='startBtn'>Click to Start</button>

			<div class="pizza">	
				<img src='images/loading-pizza.svg'>
			</div>
		</div>

	`;

	document.querySelector('main').innerHTML = template;

}


// function validateForm() {
// 	var form = document.querySelector('.login-form')
// 	var input = document.querySelector('.input-text')
// 	var validationOk = false;

	
// 	if (input.value === "") {
// 		alert("Please fill in your username.")
// 		return false;
		
// 	} 
// }

// function buttonValidator() {
// 	var button = document.querySelector('.start');

// 	button.addEventListener('submit', validateForm()) 
	
	
// }



function welcomeOverlay() {
	setTimeout( function() {
		document.querySelector('.welcome-overlay').classList.add('loading');
		setTimeout( function() {
			document.querySelector('.welcome-overlay').classList.add('away');
		}, 500);
	}, 500);

}


function makeDimmer() {
	
	setTimeout( function () {
		document.querySelector('.maker-button').classList.add('btn-dimmer');
		setTimeout(function() {
			document.querySelector('.crust-container').classList.add('crust-dimmer');
			setTimeout( function() {
				document.querySelector('.instruction-overlay').classList.add('disappear');
			}, 0);
		}, 0); 
	}, 0);
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




// function saveOverlay() {
// 	var saveBtn = document.querySelector('#save-btn')

// 	document.querySelector('.save-overlay').classList.add('save-disappear');
// 	saveBtn.addEventListener('click', function () {
// 		document.querySelector('.save-overlay').classList.add('save-appear');
// 		document.querySelector('.crust-container').classList.add('crust-dimmer2');
// 		document.querySelector('.maker-button').classList.add('btn-dimmer2');
// 		document.querySelector('.topping-items').classList.add('topping-dimmer');

// 	})

// }


// function closeSave() {
// 	var xBtn = document.querySelector('#x-btn');
// 		xBtn.addEventListener('click', function() {
// 			console.log("THIS WORKS)")

// 			document.querySelector('#save').classList.add('save-none');
// 			document.querySelector('.crust-container').classList.add('crust-bright');
// 			document.querySelector('.maker-button').classList.add('btn-bright');
// 			document.querySelector('.topping-items').classList.add('topping-bright');

// 		})
// }


var btnState = {
		openOptions: null, 
	}

function buildToppingList(toppingOptions) {
	var template = "";
	
	const toppingArr = Array.from(toppingOptions)
	
	toppingArr.forEach( function(item) {
		template += `
			
		<button class='topping-list' id='list' data-name='${item.id}'>
			<p class='topping-name teeny-voice'>${item.name}</p> 
			<picture class='topping-img' id='list-img'> 
				<img src='${item.image}'>
			<picture> 

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

	setData('pizza', selected) 
}




function clearSelection(currentOptions) {
	var startBtn = document.querySelector('#start-btn');
	var $pizzaOutlet = document.querySelector('[data-outlet="pizza"]');
	var layers = document.querySelectorAll('[data-layer]');

	
	startBtn.addEventListener('click', function(){
		document.querySelector('.instruction-overlay').classList.add('no-show');
		selected.pop();
		

		layers.forEach( function(layer) {
			window.localStorage.removeItem('pizza');
			selected.pop();
			layer.style.display = "none";
		
		});	 
			
	});


};







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
	setupWelcome,
	login,

}