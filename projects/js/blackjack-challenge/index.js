

let cardArray = []
let sum = 0
let hasBlackJack = false 
let isAlive = false
let message = " "
let player = {
	name: "Lilian",
	chips: 145,
	sayHello: function() {
		console.log("Hello!")
	}
}

player.sayHello()

let sumEl = document.querySelector("#sum-el") 
let cardEl = document.querySelector("#cards-el")
let messageEl = document.getElementById("message-el")
let playerEl = document.querySelector("#player-el")

playerEl.textContent = player.name + ": $" + player.chips


function getRandomCard() {

	let randomNumber = Math.floor(Math.random() * 13) + 1

	if (randomNumber > 10) {
		return 10
	} else if (randomNumber === 1 ){
		return 11
	} else {
		return randomNumber
	}
}


function startGame() {
	isAlive = true

	let firstCard = getRandomCard()
	let secondCard = getRandomCard()

	cardArray = [firstCard, secondCard]
	sum = cardArray[0] + cardArray[1]

	renderGame()
}



function renderGame() {
	sumEl.textContent = "Sum: " + sum
	cardEl.textContent = "Cards: " 

	for (let i = 0; i < cardArray.length; i++) {
		cardEl.textContent += cardArray[i] + " "
	}

	if (sum <= 20) {
		message = "Do you want to draw a new card?"
		hasBlackJack = false

	} else if (sum === 21) {
		message = "Woohoo! You've got blackjack"
		hasBlackJack = true 
	} else {
		message = "You're out of the game!"
		isAlive = false
	}

	messageEl.textContent = message
}




function newCard() {

	if (isAlive === true && hasBlackJack === false) {
		let card = getRandomCard()
		sum += card 

		cardArray.push(card)

		renderGame()
	}




}


















