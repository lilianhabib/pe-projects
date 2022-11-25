// 			START 		FINISH 			STEP SIZE 

// for (let i = 10; 	i <= 100; 	i+= 10) {

// 	console.log(i)
// }

// let messages = [
// 	"Message 1",
// 	"Message 2", 
// 	"Message 3", 
// 	"Message 4"
// ]



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




// for (let m = 0; m < messages.length; m+=1 ) {
// 	console.log(messages[m])
// }

// let cards = [7,3,9]

// for (let i = 0; i < cards.length; i++) {
// 	console.log(cards[i])
// }



// let sentence = ["Hello", "my", "name", "is", "Lilian."]
// let greetingEl = document.querySelector("#greeting-el")
// console.log(greetingEl)

// for (let i = 0; i < sentence.length; i++ ) {
// 	greetingEl.textContent += sentence[i] + " "
// 	console.log(greetingEl.textContent)
// }


// RRETURNING VALUES AND FUNCTIONS 

// let player1Time = 110 
// let player2Time = 107 

// function getFastestRaceTime() {
// 	if (player1Time < player2Time) {
// 		return player1Time
// 	} else if (player2Time < player1Time) {
// 		return player2Time
// 	} else {
// 		return player1Time
// 	}
// }


// // let fastestRace = getFastestRaceTime()

// // console.log(fastestRace)



// function totalRaceTime() {
// 	return player1Time + player2Time 
// }

// let totalTime = totalRaceTime()

// console.log(totalTime)



// let randomNumber = Math.random() * 6 

// console.log(randomNumber)

// // math.random generates a random number between 0 to 1 (not inclusive of 1 but including 0 - 0.00000000 to 0.9999999)

// // from: 0.00000 
// // to: 5.99999


// let flooredNumber = Math.floor(3.455632)

// console.log(flooredNumber)


// let randomNumber2 = Math.floor( Math.random() * 6 ) + 1

// // random whole numbers (without decimal) to 5

// console.log(randomNumber2)


// function rollDice() {
// 	let number = Math.floor(Math.random() * 6 ) + 1 
// 	return number
// }


// console.log(rollDice())


// LOGICAL OPERATORS 

let hasCompletedCourse = true
let givesCertificate = true 

if (hasCompletedCourse && givesCertificate === true) {
	generateCertificate()
}

function generateCertificate() {
	console.log("Generating certificate... ") 
	
} 


let hasSolvedChallenge = true 
let hasHintsLeft = false

if (hasSolvedChallenge === false && hasHintsLeft === false) {
	showSolution()
}


function showSolution() {
	console.log("Showing the solution...")
}


let likesDocumentaries = true 
let likesStartups = false

if (likesDocumentaries === true || likesStartups === true) {
	recommendMovie()
}

function recommendMovie() {
	console.log("Hey, check out this new film we think you will like!")
}


let course = {
	title: "Learn CSS Grid for free",
	lesson: 16, 
	length: 63,
	creator: "Per", 
	level: 2,
	isFree: true,
	tags: ["html", "css"]
}


console.log(course.tags)

let listing = {
	title: "Live like a King in my Castle", 
	accommodations: ["4 guests", "1 bedroom", "Private half-bath"], 
	rating: 4.95, 
	cost: "$190 / night", 
	superhost: true
}

console.log(listing.title)
console.log(listing.accommodations)



let person = {
	name: "Lilian", 
	age: 27, 
	country: "Canada"
}

function logData() {
	console.log (person.name + " is " + person.age + " years old and lives in " + person.country + ".")
	
}


logData()


// 

let age = 67

function discount() {
	if (age < 6) {
		console.log ("Free")
		
	} else if (age <= 17) {
		console.log ("Child discount will be applied")

	} else if (age <= 26) {
		console.log("Student discount will be applied")
	} else if (age <= 66) {
		console.log("Full price of tickets will be applied")
	} else {
		console.log("Senior citizen discount will be applied")
	}
}

discount()



let largeCountries = ["China", "India", "USA", "Indonesia", "Pakistan"]

console.log("The 5 largest countries in the world:")
for (let c = 0; c < largeCountries.length; c++) {
	console.log( "- " + largeCountries[c])

}

let largeCountries2 = ["Tuvalu", "India", "USA", "Indonesia", "Monoco"]


	
largeCountries2.pop()

largeCountries2.push("Pakistan")


console.log (largeCountries2)

largeCountries2.shift()
largeCountries2.unshift("China")

console.log (largeCountries2)


let dayOfMonth = 31
let weekday = "Friday"

if (dayOfMonth === 13 && weekday === "Friday") {
	console.log ("spooky")
}


let hands = ["rock", "paper", "scissor"]

function results() {
	let randomIndex = Math.floor (Math.random() * 3)
	console.log(hands[randomIndex])
}


results()

let fruit = ["apple", "orange", "apple", "apple", "orange"]
let appleShelf = document.getElementById('apple-shelf')
let orangeShelf = document.getElementById("orange-self") 



function fruitArray() {
	for (let f = 0; f < fruit.length; f++) {
		if (fruit[f] === "apple") {
			appleShelf.textContent += "apple"
		} else if (fruit[f] === "orange") {
			orangeShelf.textContent += "orange"
		}
}	}


fruitArray()







































