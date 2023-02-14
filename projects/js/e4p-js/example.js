
var favouriteMovies = [
	{
		title: "Forrest Gump", 
		year: "1994", 
		award:"no", 
	},
	{
		title: "Mrs.Doubtfire", 
		year: "1993", 
		award:"no", 
	},
	{
		title: "Goodwill Hunting", 
		year: "1997", 
		award:"yes", 
	},
	{
		title: "Jumanji", 
		year: "1995", 
		award:"yes", 
	},
	{
		title: "Little Rascals", 
		year: "1995", 
		award:"yes", 
	},
		
];


// var awards = favouriteMovies.filter (function (item) { //returns a new array
// 	return item.award == "yes"; 

// });
// console.log(awards);


// var noAwards = favouriteMovies.filter(function(item){
// 	return item.award == "no"; 
// })

// console.log(noAwards);



// //I want each item to be put in a list - awards and no awards 

// function listSection(items, heading){
// 	var h2 = document.createElement('h2'); 
// 	h2.textContent = heading; 
// 	h2.classList.add('bold-voice'); 
// 	document.body.appendChild(h2); 

// 	var ol = document.createElement('ol'); 

// 	items.forEach(function (item){
// 		var li = document.createElement('li'); 
// 		li.textContent = item.title+ "!"; 
// 		ol.appendChild(li);
// 	});

// 	document.body.appendChild(ol);
// }

// listSection(awards, "Movies with Awards");



// listSection (noAwards, "Movies with no Awards");






// //put it in a list 
// 	function animalListSection(items, heading){
// 		var h2 = document.createElement('h2');
// 		h2.textContent = heading; 
// 		document.body.appendChild(h2);

// 		var ol = document.createElement('ol');

// 		items.forEach( function (item){
// 			var li = document.createElement('li');
// 			li.textContent = item.animal;
// 			ol.appendChild(li);
// 		})
		
// 		document.body.appendChild(ol);
// 	}



// animalListSection(mammal, "Lilian's list of mammals");

// animalListSection(aquatic, "Lilian's list of aquatic animals");




























// var mammal = petInfo.filter (function (item) { //returns a new array
// 	return item.type == "mammal"; 
	
	
// });


// var aquatic = petInfo.filter(function(item){
// 	return item.type == "aquatic animal";
// })



// //put it in a list 
// 	function animalListSection(items, heading){
// 		var h2 = document.createElement('h2');
// 		h2.textContent = heading; 
// 		document.body.appendChild(h2);

// 		var ol = document.createElement('ol');

// 		items.forEach( function (item){
// 			var li = document.createElement('li');
// 			li.textContent = item.animal;
// 			ol.appendChild(li);
// 		})
		
// 		document.body.appendChild(ol);
// 	}



// animalListSection(mammal, "Lilian's list of mammals");

// animalListSection(aquatic, "Lilian's list of aquatic animals");






// var cities = [
// 	{
// 		city: "Toronto", 
// 		visited: "yes", 
// 	}, 
// 	{
// 		city: "Vancouver",
// 		visited: "yes",  
		
// 	},
// 	{
// 		city: "New York", 
// 		visited: "yes", 

// 	}, 
// 	{
// 		city: "Seattle",
// 		visited: "no",  
// 	}, 
// 	{
// 		city: "Paris",
// 		visited: "no",  
// 	}, 
// 	{
// 		city: "Sydney",
// 		visited: "no", 
// 	},

// ]; 


// var visitedCities = cities.filter (function(item, index) {
// 	return item.visited == "yes";
// });

// console.log(visitedCities); 

// var willVisitCities = cities.filter(function(item, index){
// 	return item.visited == "no"; 
// })

// console.log(willVisitCities);


// function cityListSection (items, heading) {
// 	var h2 = document.createElement("h2"); 
// 	h2.textContent = heading; 
// 	document.body.appendChild(h2); 

// 	var ol = document.createElement('ol'); 

// 	items.forEach (function (item){
// 		var li = document.createElement('li');
// 		li.textContent = item.city; 
// 		ol.appendChild(li); 
// 	})

// 	document.body.appendChild(ol);

// }; 

// cityListSection (visitedCities, "Visited Cities");

// cityListSection(willVisitCities, "Will Visit"); 



// var clothing = [
// 	{
// 		type: "pants", 
// 		amount: 20, 
// 	}, 
// 	{
// 		type: "sweaters", 
// 		amount: 10, 
// 	}, 
// 	{
// 		type: "socks", 
// 		amount: 35, 
// 	}, 
// 	{
// 		type: "t-shirts", 
// 		amount: 60, 
// 	}, 
// 	{
// 		type: "jacket", 
// 		amount: 17, 
// 	}, 
// 	{
// 		type: "dresses", 
// 		amount: 2, 
// 	},
// ];



// var buyMore = clothing.filter(function (item){
// 	if (item.amount < 30) {
// 		return item.type; 
// 	}

// })

// var noMore = clothing.filter(function (item) {
// 	if (item.amount > 30) {
// 		return item.type;
// 	}
// })


// function clothingListSection(items, heading) {
// 	var h2 = document.createElement ('h2');
// 	h2.textContent = heading;
// 	document.body.appendChild(h2); 

// 	var ol = document.createElement('ol'); 

// 	items.forEach(function(item){
// 		var li = document.createElement('li'); 
// 		li.textContent = item.type; 
// 		ol.appendChild(li); 
// 	})

// 	document.body.appendChild(ol); 
// }

// clothingListSection(buyMore, "Buy More"); 


// clothingListSection(noMore, "No Buy");





// var drinks = [
// 	{
// 		type: "coffee", 
// 		price: 5.99,
// 	},
// 	{
// 		type: "carbonated", 
// 		price: 3.99,

// 	},
// 	{
// 		type: "juice", 
// 		price: 2.67, 
// 	},
// 	{
// 		type: "carbonated water", 
// 		price: 9.45, 
// 	},
// 	{
// 		type: "water", 
// 		price: 6.45, 
// 	}
// ];


// // select drinks that are under 5 dollars 
// var fiveUnder = drinks.filter(function (item) {
// 	if (item.price < 5) {
// 		return item.type; 
// 	}
// });

// //select drinks that are over 5 dollars 

// var fiveOver = drinks.filter( function(item){
// 	if (item.price > 5){
// 		return item.type;
// 	}
// });


// function drinkList (items, heading) {
// 	var h2 = document.createElement('h1'); 
// 	h2.textContent = heading;
	
// 	document.body.appendChild(h2); 

// 	var ol = document.createElement('ol'); 

// 	items.forEach (function(item){
// 		var li = document.createElement('li'); 
// 		li.textContent = item.type; 
// 		ol.appendChild(li);
// 	})
	

// 	document.body.appendChild(ol);
// }




// drinkList(fiveUnder, "Drinks under $5 dollars");


// drinkList(fiveOver, "Drinks over $5 dollars");








// var food = [
// 	{
// 		type: "salad", 
// 		available: "yes",
// 	},
// 	{
// 		type: "sandwich", 
// 		available: "yes",
// 	},
// 	{
// 		type: "potato soup", 
// 		available: "no",
// 	},
// 	{
// 		type: "steak", 
// 		available: "no",
// 	},
// 	{
// 		type: "chicken wrap", 
// 		available: "no",
// 	},
// 	{
// 		type: "fried rice", 
// 		available: "no",
// 	},
// ]; 


// var availableFood = food.filter(function(item){
// 	if (item.available == "yes"){
// 		return item.type;
// 	}
// }); 

// var notAvailableFood = food.filter(function(item){
// 	if (item.available == "no") {
// 		return item.type; 
// 	}
// }); 

// function foodListSection(items,heading) {
// 	var h2 = document.createElement('h2'); 
// 	h2.textContent = heading; 
// 	document.body.appendChild(h2); 

// 	var ol = document.createElement('ol'); 

// 	items.forEach(function(item){
// 		var li = document.createElement ('li'); 
// 		li.textContent = item.type;
// 		ol.appendChild(li); 
// 	}); 

// 	document.body.appendChild(ol); 
// }; 

// foodListSection(availableFood, "Available Food"); 

// foodListSection(notAvailableFood, "Food Not Available"); 


console.log("Hello");



function isAnagram (one, two) {
	if (one.length == two.length) {
		console.log("true"); 
	} else {
		console.log("false");
	}
};

isAnagram ("tone", "note");


































