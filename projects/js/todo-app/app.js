const todos = [];

function print(note = ""){ // why is the parameter: note=''. Why isn't this a variable? 
	console.log(`--- ${note}`); 
	console.log('todos: ', todos); // when this function is called, it will do two things: log the note and the todos
}


var count = 0;

function add(content) {
	const todo = {
		id: `a${count++}`,
		content: content, 
	}; 
	todos.push(todo); 
	print(`Added: ${content}`); 
};// when called, this function will do two things: push the todo and print the string 

function remove(id) {
	var todo = {};
	print(`Removed: ${todos[id].content}`);
	todos.splice(id, 1);  

};

function complete(id) {
	var todo = {};
	print(`Complete: ${todos[id].content}`);
	todos[id].complete = true;
};



// var theIndex = todos.findIndex(obj => obj.id == 1); 


// function update(){
// };

// find the index and content 
for (var i = 1; i < 10; i++) {
	console.log(i);
}

todos.forEach ( function(item, index, fullArray){
	console.log('forEach --- every single one', index);
})

// once found, update the content 




//return the new item back into the array 



add("clean the dishes"); 

add("grocery shopping");

add('eat');

add('sleep');

add('vacuum');

add('go to sleep');


update();

complete(1);


remove(2); 




var todos = []; 
var todoID = 0;

function print(note = ""){
	console.log(`----- ${note}`);
	console.log('To-Do', todos);
}

function addTodo(content) {
	var todo = {
		id: `${todoID++}`, 
		content: content,
	}; 
	todos.push(todo); 
	print (`Added: ${content}`); 

}

function removeTodo(id) {
	print (`Removed: ${todos[id].content}`);
	todos.splice(id, 1);
}

function completeTodo(id) {
	todos[id].complete = true; 
	print (`Completed: ${todos[id].content}`);
}


function update(id, content) {

	todos.forEach ((content, index) => {
		if (content.id === todos.id) {
			todos[index] = updatedContent; 
		}

	});
}


addTodo("This is the first item");

addTodo("This is the second item");

addTodo("This is the third item");

addTodo("THis is the fourth item"); 

addTodo("This is the fifth item"); 



removeTodo (2);

completeTodo (1);

// todos[2].content = "This the updated item"; 

update(todos[2].content = "This the updated item");







function Places(name, year) {

	this.name = name; 
	this.year= year;

	this.shout = function() {
		alert(`Let's go to ${name}!`); 
	}
}

const japan = new Places("Japan", 2023 ); 

const singapore = new Places("Singapore", 2024); 

const hawaii = new Places("Hawaii", 2021); 

const thailand = new Places ("Thailand", 2023); 

const southKorea = new Places ("South Korea", 2024); 

const indonesia = new Places ("Indonesia", 2022); 



console.log(`Let's go to ${japan.name} in ${japan.year}`);

console.log(`Let's go to ${singapore.name} in ${singapore.year}`);

console.log(`Let's go to ${thailand.name} in ${thailand.year}`);

console.log(`Let's go to ${southKorea.name} in ${southKorea.year}`);

console.log(`I went to ${hawaii.name} in ${hawaii.year}`); 

console.log(`I went to ${indonesia.name} in ${indonesia.year}`);



japan.shout();

singapore.shout(); 

thailand.shout(); 

southKorea.shout();

hawaii.shout();

indonesia.shout();


Places.prototype.yell = function() {
	console.log(`Let's go on an adventure to ${this.name}`)
}

japan.yell();

singapore.yell();

thailand.yell();

southKorea.yell();

hawaii.yell();

indonesia.yell();












constructor function 

function TravelList(country, complete) {

	this.country = country; 
	this.complete = complete; 

	this.alert = function() {
		alert(`Let's go on an adventure to ${this.country}!!`)
	}; 

}; 


const japan = new TravelList ("Japan",  false); 
const southKorea = new TravelList ("South Korea", false); 
const singapore = new TravelList("Singapore", false); 


console.log(japan.country);
console.log(japan.complete);


TravelList.prototype.shout = function(){ 
	console.log(`I have not completed my adventure to ${this.country}.`)
};


japan.shout();
southKorea.shout();
singapore.shout();



save to local storage



var data = localStorage;

data.clear();


function intialize(key, value) {
	if (data.getItem(key)) { 
		data.setItem(key, JSON.stringify(value));
	} else {
		data.setItem(key, JSON.stringify(value));
	}
}

intialize("country7", "Hawaii");

intialize("country1", "Singapore");
intialize("country2", "Japan");
intialize("country3", "South Korea");
intialize("country4", "Vietnam");
intialize("country5", "Thailand");
intialize("country6", "Greece");



function parse(key) {
	if (data.getItem(key)){
		data.getItem(JSON.parse(key));
	} else {
		data.setItem(key, JSON.parse(key));
	};
}

parse("country1");

 
















































