const tvApp = {

	theList: [], 
	listID: 1, 

	print: function (note="") {
		console.log(`--- ${note}`);
		console.log(`Show: `, this.theList);
	},

	


	add: function (content) {
		var show = {
			id: this.listID++,
			complete: false,
			content: content,
		};

		this.theList.push(show); 
		this.print(`Added: ${content}`)
	},

	findTodoById: function(idToFind) {
		return this.theList.find( function(currentTodo) {
			return currentTodo.id === idToFind;
		});
	},


	
	delete: function(id){
		this.theList.splice(id, 1); 
		this.print(`Delete: ${this.theList[id]}`)
	}, 

	complete: function(idToComplete) {
		const found = this.findTodoById(idToComplete);
		if (found) {
			found.complete = true;
		} else {
			console.log(idToComplete + " not found");
		}
	},

	update: function (idToUpdate, newContent) {
		var found = this.theList.find( function(show){
			return show.id === idToUpdate; 
		}); 

		if (found) {
			found.content = newContent; 
		} else {[
			console.log(`Not found: ${this.theList.content}`)]}
	},
};



tvApp.add('Bling Empire');

tvApp.add('This is Us');

tvApp.add('Jeffrey Dhamer');


// tvApp.delete(1); 

tvApp.complete(3);



