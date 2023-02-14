const placesToTravel = {

	travelList: [], 
	countryId: 1, 


	findById: function(idToFind) {
		return this.travelList.find( function(currentTodo) {
			return currentTodo.id === idToFind;
		});
	},

	print: function (note = "") {
		console.log(`----${note}`);
		console.log(`Places to Travel`, this.travelList)
	},

	add: function (content) {
		const place = {
			id: `a${this.countryId++}`,
			complete: false,
			content: content, 
		};
		this.travelList.push(place); 
		this.print(`Added: ${content}`); 
	},

	remove: function(id) {
		this.travelList.splice(id, 1);
		this.print(`Removed ${this.travelList[id].content}`);
	},

	complete: function(idComplete) {
		const found = this.findById(idComplete) 
		if (found) {
			found.complete = true; 
		} else {
			console.log(idComplete + " not found"); 
		}
	},

	update: function (idToUpdate, newContent) {
		var found = this.travelList.find( function(place){
			return place.id === idToUpdate;
		}); 

		if (found) {
			found.content = newContent; 
		} else {
			console.log(idToUpdate + " not found"); 
		}
	},

};


placesToTravel.add(`Japan`);

placesToTravel.add(`Singapore`);

placesToTravel.add(`South Korea`);

placesToTravel.add(`Thailand`);

placesToTravel.add(`Vietnam`);

placesToTravel.add(`Indonesia`);

placesToTravel.add(`Hawaii`);

placesToTravel.add(`Australia`);

placesToTravel.add(`Greece`);

placesToTravel.remove(1);

placesToTravel.update('a9', "Italy");

placesToTravel.complete("a3");



