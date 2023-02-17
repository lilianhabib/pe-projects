import { changeTo, $mainView } from './changeTo.js';

import  instructionItems  from './instructions-steps.js';




// import { crust } from '../pizza-crafter/crust.js'; 

// const pCrust = document.querySelector('#p-crust');


// crust.forEach(crust => {
// 	const li = document.createElement('li');
// 	const img = document.createElement('img');
// 	const picture = document.createElement('picture');
// 	picture.classList.add('topping-img')
// 	img.classList.add('topping');
// 	li.classList.add('list-crust');
// 	li.innerHTML = crust.text;
// 	img.src = `images/${crust.image}`;
// 	img.draggable = "true";
// 	picture.appendChild(img);
// 	li.appendChild(picture);
// 	pCrust.appendChild(li);
// });


// // 


// import { sauces } from '../pizza-crafter/sauces.js';

// const pSauce = document.querySelector('#p-sauce');


// sauces.forEach (sauces => {
// 	const li = document.createElement('li');
// 	const img = document.createElement('img');
// 	const picture = document.createElement('picture');
// 	picture.classList.add('topping-img');
// 	img.classList.add('topping');
// 	li.classList.add('list-sauces');
// 	li.innerHTML = sauces.text;
// 	img.src = `images/${sauces.image}`;
// 	picture.appendChild(img);
// 	li.appendChild(picture);
// 	pSauce.appendChild(li);
// });



// // 

// import { cheese } from '../pizza-crafter/cheese.js';

// const pCheese = document.querySelector('#p-cheese');

// cheese.forEach (cheese => {
// 	const li = document.createElement ('li');
// 	const img = document.createElement('img');
// 	const picture = document.createElement('picture');
// 	picture.classList.add('topping-img');
// 	img.classList.add('topping');
// 	li.classList.add('list-cheese');
// 	li.innerHTML = cheese.text;
// 	img.src = `images/${cheese.image}`;
// 	picture.appendChild(img)
// 	li.appendChild(picture); 
// 	pCheese.appendChild(li);
	
// });



// // 

// import { meat } from '../pizza-crafter/meat.js';

// const pMeat = document.querySelector('#p-meat');

// meat.forEach(meat => {
// 	const li = document.createElement('li');
// 	const img = document.createElement('img');
// 	const picture = document.createElement('picture');
// 	picture.classList.add('topping-img');
// 	img.classList.add('topping'); 
// 	li.classList.add('list-meat');
// 	img.src = `images/${meat.image}`;
// 	li.innerHTML = meat.text; 
// 	picture.appendChild(img);
// 	li.appendChild(picture); 
// 	pMeat.appendChild(li); 
// });


// // 



// import { veggies } from '.veggies.js';

// const pVeggies = document.querySelector('#p-veggies');

// veggies.forEach(veggies => {
// 	const li = document.createElement('li');
// 	const img = document.createElement('img');
// 	const picture = document.createElement('pictture');
// 	picture.classList.add('topping-img');
// 	img.classList.add('topping');
// 	li.classList.add('list-veggies')
// 	img.src = `images/${veggies.image}`; 
// 	li.innerHTML = veggies.text; 
// 	picture.appendChild(img);
// 	li.appendChild(picture); 
// 	pVeggies.appendChild(li);
// });




// window.addEventListener('click', function(event) {

// 	if (event.target.matches('[data-to]') ) {
// 		changeto(event.target.dataset.to);
// 	};

	
// 	if ( event.target.matches("[data-to='welcome']") ) {

// 		setTimeout( function() {
// 			document.querySelector('.welcome-overlay').classList.add('loading');
// 			setTimeout( function() {
// 				document.querySelector('.welcome-overlay').classList.add('away');
// 				changeto( event.target.dataset.to );  
// 			}, 2500);
// 		}, 500);
		 
// 	};






// });




