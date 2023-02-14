// //blueprint 

// function Monster(name, age) {

// 	//var this = {}; 

// 	this.name = name;
// 	this.age = age;

// 	this.roar = function() {
// 		alert(`${this.name}!!!!!`);
// 	}

// }

// //outcome 

// const chunky = new Monster("Chunky", 15); 

// const bunchy = new Monster("Bunchy", 99); 
// // chunky.roar(); 

// console.log(chunky.name);

// Monster.prototype.whisper = function () {
// 	console.log(`....hi my name is ${this.name}`)
// };

// chunky.whisper();




function TravelChecklist() {

	// var this = {}; 

	this.list = []; 
	this.countryId = 1; 

	this.print = function(note = "") {
		console.log(`**** ${note}`);
		console.log("Places: ", this.list);
	}


	this.findById = function(idToFind) {
		return this.list.find( function(currentList) {
			return currentList.id === idToFind; 
		});
	} 

	this.add = function(name) {
		var place = {
			id: `a${this.countryId++}`,
			complete: false,
			name: name, 
		}

		this.list = [...this.list, place]; 
		this.print(`Added: ${place.name}`); 
	}

	this.remove = function(id) {
		const found = this.findById(id)
		var indexToDelete = this.list.indexOf(found); //array.includes(item);
		this.list.splice(indexToDelete, 1); 
		this.print(`Removed: ${this.list[indexToDelete].name}`); 
	}

	this.complete = function(idComplete) {
		const found = this.findById(idComplete)
		if (found) {
			found.complete = true;
		} else {
			console.log(idComplete + " not found"); 
		}
	}

	this.update = function(id, newName) {
		var found = this.findById(id)

		if (found) {
			found.name = newName;
		} else {
			console.log(id + " not found");
		}
	} 

	// return this (the object with all of its properties and methods)

}


const travel = new TravelChecklist(); //why



// TravelList.prototype.shout = function(){
// 	console.log(`Let's go on an adventure to ${item}`)
// }

travel.add("Japan");

travel.add("Singapore");

travel.add("South Korea");

travel.add("Vietnam");

travel.add("Thailand");

travel.add("Hawaii");

travel.add("Indonesia");

travel.add("Greece");

travel.complete('a6');

travel.complete('a7');

travel.remove('a6')

travel.update('a8', "Rome");



function tutorApp () {

	this.tutorList = [];
	this.tutorId = 1;


	this.findTheId = function(findTheId) {
		return this.tutorList.find( function(theCurrentId) {
			return theCurrentId.id === findTheId; 
		});
	} 


	this.print = function( note="" ) {
		console.log(`---${note}`);
		console.log('Tutor Appointments: ', this.tutorList)
	}

	this.add = function(name) {
		var tutor = {
			id: `a${this.tutorId++}`,
			name: name,
			complete: false, 
		}

		this.tutorList = [...this.tutorList, tutor]; 
		this.print(`Added student: ${tutor.name}`)
	}


	//remove 
	this.remove = function(id) {
		const found = this.findTheId(id)
		var deleteId = this.tutorList.indexOf(found); //array.includes(item);
		this.tutorList.splice(deleteId, 1); 
		this.print(`Removed student: ${this.tutorList[deleteId].name}`); 
	}




	//complete
	this.complete = function(completedId) {
		const found = this.findTheId(completedId); 
		if (found) {
			found.complete = true; 
		} else {
			return `Please try again`
		}

	}



	//update

	this.update = function(theId, newName) {
		const found = this.findTheId(theId) 
		if (found) {
			found.name = newName 
		} else {
			return theId + " cannot be found"; 
		}
	}

}

var tutor = new tutorApp();


tutor.add('student1');

tutor.add('student2');

tutor.add('student3');

tutor.add('student4');

tutor.remove("a1");

tutor.complete('a4')











