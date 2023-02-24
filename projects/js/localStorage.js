
var theData = localStorage;

theData.clear();

var packingList = ["shoes", "jacket", "mitten", "phone", "laptop", "shirts", "socks"];


theData.setItem("Packing List: ", JSON.stringify(packingList)); 

///

theData.setItem("Name", JSON.stringify("Lilian"));
theData.setItem("Movie",JSON.stringify("Forrest Gump")); 
theData.setItem("Weather", JSON.stringify("Winter")); 
theData.setItem("Colour", JSON.stringify("Purple"));
theData.setItem("Item", JSON.stringify("Ring"));


const name = theData.getItem('Name');
console.log(name);
const type1 = typeof name == "string";
console.log(type1);
const parseName = JSON.parse(name);
console.log(parseName);


console.log(theData.getItem('Movie'));
console.log(typeof "Movie" == "boolean");

console.log(theData.getItem("Weather"));
console.log(typeof "Weather" == "object")

console.log(theData.getItem('Colour'));
console.log(typeof "Colour" == "string");


console.log(theData.getItem('Item'));
console.log(typeof "Item" == "string");

//

const theMessage = `Hello, my name is ${name}`; 

console.log(theMessage);

document.body.textContent = theMessage;

//

function stringify (key, value) {
	var data = localStorage;
	var setData = data.setItem(key, value);
	var get = setData.getItem(key);
	var convert = JSON.stringify(value);
	console.log(convert);
}

stringify("game", "Taboo");

function parse (key) {
	var data = localStorage;
	var theGet = data.getItem(key);
	var parseData = JSON.parse(theGet);
	console.log(parseData);
}

parse("Item");
parse("Colour");













