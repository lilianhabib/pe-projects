// class TutorApp {

// 	constructor(){
// 		this.tutorList = []; 
// 		this.tutorId = 1; 
// 	}

// 	findTheId(findTheId) {
// 		return this.tutorList.find( function(theCurrentId){
// 			return theCurrentId.id === findTheId; 
// 		})
// 	}

// 	print(note="") {
// 		console.log(`---${note}`);
// 		console.log(`Student List:`,  this.tutorList)
// 	}

// 	// with the find the id function, it will take the id(called findTheId) you want to find, then in the tutorList, it will find the id you are looking for (called theCurrentId), and return the id if it is the same as the one you typed in the brackets. 

// 	add(content) {
// 		var tutor = {
// 			id: `a${this.tutorId++}`, 
// 			content: content, 
// 			complete: false, 
// 		}
// 		this.tutorList = [...this.tutorList, tutor]; 
// 		this.print(`Added: ${tutor.content}`);
// 	}

// 	remove(id) {
// 		const found = this.findTheId(id)
// 		var deleteId = this.tutorList.indexOf(found); //array.includes(item);
// 		this.tutorList.splice(deleteId, 1); 
// 		this.print(`Removed student: ${this.tutorList[deleteId].content}`);
// 	}


// 	complete(id) {
// 		for (let i = 0; i < this.tutorList.length; i++) {
// 			if (this.tutorList[i].id == id) {
// 				this.tutorList[i].complete = true;
// 			}
// 		}
// 	}

// 	update(id, newContent) {
// 		const found = this.findTheId(id)
// 		if (found) {
// 			found.name = newContent; 
// 		} else {
// 			return id + " cannot be found"; 
// 		}
// 	}
// }

// var tutor = new TutorApp(); 

// tutor.add("Avery");
// tutor.add("Stella");
// tutor.add("Jade");
// tutor.add("student 4");
// tutor.add("student 5");
// tutor.add("student 6");
// tutor.complete("a2");
// tutor.remove("a1")


class groceryApp {

	constructor() {
		this.groceryList = []; 
		this.groceryId = 1; 
	}

	findId(findId) {
		return this.groceryList.find( function(currentId) {
			return currentId.id == findId; 
		});
	}

	print(note="") {
		console.log(`---${note}`); 
		console.log("Item: ", this.groceryList); 
	}

	add(content) {
		var item = {
			id: `a-${this.groceryId++}`,
			content,
			complete: false,
		}

		this.groceryList =[...this.groceryList, item];
		this.print(`Add: ${item.content}`);
	}

	remove(id) {
		this.groceryList.splice(id, 1); 
		// this.print(`Removed ${this.groceryList[id].content}`);
	}

	complete(id) {
		var found = this.findId(id);
		if (found) {
			found.complete == true;
		} else {
			this.print(`Cannot be found`)
		}
	}
}

var item = new groceryApp(); 


item.add("apples");
item.add("bananas");
item.add("pie");
item.add("watermelon");
item.add("plant");
item.add("meat"); 
item.add("shirt");
item.remove();
