
import { crust } from '../pizza-crafter/crust.js'; 

const pCrust = document.querySelector('#p-crust');


crust.forEach(crust => {
	const li = document.createElement('li');
	const img = document.createElement('img');
	img.classList.add('topping');
	li.classList.add('list-crust');
	img.src = `images/${crust.image}`;
	li.innerHTML = crust.text;
	li.appendChild(img);
	pCrust.appendChild(li);
});


// 


import { sauces } from '../pizza-crafter/sauces.js';

const pSauce = document.querySelector('#p-sauce');


sauces.forEach (sauces => {
	const li = document.createElement('li');
	const img = document.createElement('img');
	img.classList.add('topping');
	li.classList.add('list-sauces');
	img.src = `images/${sauces.image}`;
	li.innerHTML = sauces.text;
	li.appendChild(img);
	pSauce.appendChild(li);
});



// 

import { cheese } from '../pizza-crafter/cheese.js';

const pCheese = document.querySelector('#p-cheese');

cheese.forEach (cheese => {
	const li = document.createElement ('li');
	const img = document.createElement('img');
	img.classList.add('topping');
	li.classList.add('list-cheese');
	img.src = `images/${cheese.image}`;
	li.innerHTML = cheese.text;
	li.appendChild(img); 
	pCheese.appendChild(li);
	
});



// 

import { meat } from '../pizza-crafter/meat.js';

const pMeat = document.querySelector('#p-meat');

meat.forEach(meat => {
	const li = document.createElement('li');
	const img = document.createElement('img');
	img.classList.add('topping'); 
	li.classList.add('list-meat');
	img.src = `images/${meat.image}`;
	li.innerHTML = meat.text; 
	li.appendChild(img); 
	pMeat.appendChild(li); 
});


// 



import { veggies } from '../pizza-crafter/veggies.js';

const pVeggies = document.querySelector('#p-veggies');

veggies.forEach(veggies => {
	const li = document.createElement('li');
	const img = document.createElement('img');
	img.classList.add('topping');
	li.classList.add('list-veggies')
	img.src = `images/${veggies.image}`; 
	li.innerHTML = veggies.text; 
	li.appendChild(img); 
	pVeggies.appendChild(li);
});




