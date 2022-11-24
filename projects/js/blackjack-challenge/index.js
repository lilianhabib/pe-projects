

// let firstCard = 10

// let secondCard = 11

// let sum = firstCard + secondCard 

// if (sum < 21) {
// 	console.log("Do you want to draw a new card?")
// } else if (sum === 21) {
// 	console.log("You have blackjack!")
// } else if (sum > 21) {
// 	console.log("You are out of the game")
// }

// 
// 
// 

// let age = 27

// if (age <= 21) {
// 	console.log("You cannot enter the club")
// } else  {
// 	console.log("Welcome!")
// }

// 
// 
// 

// let age = 123

// if (age < 100) {
// 	console.log("Not elegible")
// } else if (age === 100) {
// 	console.log("Here is your birthday card from the King!")
// } else {
// 	console.log("Not elegible, you have already gotten one")
// }

 // console.log(4 === 3)// false
 // console.log(5 > 2) // true
 // console.log(12 > 12) // false
 // console.log(3 < 0) // false 
 // console.log( 3 >= 3)// true 
 // console.log(11 <= 11) //  true 
 // console.log(3 <= 2) // false 




let firstCard = 10 
let secondCard = 4
let cardArray = [firstCard, secondCard]

let sum = firstCard + secondCard
let hasBlackJack = false 
let isAlive = true 
let message = " "


let sumEl = document.querySelector("#sum-el") 
let cardEl = document.querySelector("#cards-el")
let messageEl = document.getElementById("message-el")

function startGame() {
	renderGame()
}

function renderGame() {
	sumEl.textContent = "Sum: " + sum
	cardEl.textContent = "Cards: " + cardArray[0] + " " + cardArray[1]

	if (sum <= 20) {
		message = "Do you want to draw a new card?"
	} else if (sum === 21) {
		message = "Wohoo! You've got blackjack"
		hasBlackJack = true 
	} else {
		message = "You're out of the game!"
		isAlive = false
	}

	messageEl.textContent = message
}



function newCard() {
	console.log("Drawing a new card from the deck!")

	let card = 6 

	cardArray.push(6)

	console.log(cardArray)

	sum += card 

	startGame()
}

// 			START 		FINISH 			STEP SIZE 

for (let i = 10; 	i <= 100; 	i+= 10) {

	console.log(i)
}










