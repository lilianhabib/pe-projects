const name = [
	{
		"name": "Lilian",
		"number": 1,  
	}, 
	{
		"name": "Devon", 
		"number": 2, 
	},
	{
		"name": "Matthew", 
		"number": 3, 
	},
	{
		"name": "Andrew", 
		"number": 4, 
	},
	{
		"name": "Victor", 
		"number": 5,
	},

]; 

name.forEach(function(purple, red){
	console.log(`The value is ${purple.name} and number is ${purple.number} and index is ${red}`); 
}); 


name.forEach(red => console.log(`Hello, ${red.name} and value is ${red.number}`))




const fruits = [
	{
		"name": "apple", 
		"amount": 4,
	}, 
	{
		"name": "grapes", 
		"amount": 10,
	},
	{
		"name":"oranges", 
		"amount": 2, 
	},
	{
		"name": "banana", 
		"amount": 8, 
	}, 
	{
		"name": "mango", 
		"amount": 9, 
	}
]; 

fruits.forEach(function(item) {
	console.log(`I will be looking for ${item.name} and will buy ${item.amount}`)
}); 


fruits.forEach(item => console.log(`I will be buying ${item.amount} ${item.name} at the grocery store today`));























