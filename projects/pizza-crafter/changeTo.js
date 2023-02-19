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
				//make a function		

	};




	var btnState = {
		openOptions: null, 
	}



	function buildToppingList(toppingOptions) {
		var template = ""; 

		toppingOptions.forEach( function(item) {
			template += `
				
				<button class='topping-list' id='list' data-name='${item.id}'>
					${item.id}
					<p class='topping-name teeny-voice'>${item.name}</p> 
					<picture class='topping-img' id='list-img'> 
						<img src='${item.image}'>
					<picture> 

				</button> 
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
			console.log(data.options);
			$optionsOutlet.innerHTML = buildToppingList( toppingOptions[btnState.openOptions] );

		};

		//when the image is clicked (ww-crust), the click will know what image I have clicked and display it on the screen 
	});

	// setTimeout( function() {
	// 		document.querySelector('.crust-container').classList.add('container');
			
	// 		var toppingBtn = document.querySelector('[data-topping-img]')
	// 		toppingBtn.addEventListener('click', function () {
	// 			document.querySelector('#pesto').classList.add('p-appear');

	// 		})
		
	// 	}, 0);

	



console.clear();

var selected = [];




function updatePizza(currentOptions) {
	var layers = document.querySelectorAll('[data-layer]');
	layers.forEach( function(layer) {
		var name = layer.dataset.layer;
		console.log('layer name', name)
		if (currentOptions.includes(name)) {
			layer.style.opacity = 1;
		} else {
			layer.style.opacity = 0;
		}
	})
}

function updateSelection(button) {
	var clickedName = button.dataset.name;
	if (selected.includes(clickedName)) {
		var index = selected.indexOf(clickedName);
		selected.splice(index, 1);
	} else {
	
		selected.innerHTML = selected.push(clickedName);
	}
}



window.addEventListener('click', function(event) {
	
	if (event.target.matches("[data-name]")) {
		updateSelection(event.target)

	};
	
	updatePizza(selected);
	
	console.log('selected', selected);
})

updatePizza(selected);
















});


export {
	$mainView, 
	changeTo,


}