
document.getElementById("count-el")

//  intialize the count as 0 
// listen for clicks on the increment button 
// increment the count variable when the button is clicked 
// change the count-el in the html to reflect the new count 

let countEl = document.getElementById("count-el")
let saveEl = document.getElementById('save-el')
let count = 0

function increment() {
	count += 1
	countEl.textContent = count
}


function save() {
	let countStr = count + " - "
	saveEl.textContent += countStr
	countEl.textContent = 0
	count = 0
}

	


let firstName = "Lilian"
let lastName = "Habib"

let fullName = firstName + " " + lastName

console.log(fullName)


let greeting = "Hi there, " + firstName + "!"

console.log(greeting)











// save()

// let user = "Lilian"

// let message = "You have three new notifications"

// console.log(message + ", " + user + "!");

// let messageToUser = message + ", " + user + "!"

// console.log(messageToUser)

// let name = "42"

// let greeting = "Hi, my name is" 

// let myGreeting = greeting + ", " + name + "!"

// console.log(myGreeting)



// console.log(4 + 5) // 9
// console.log("2" + "4") // 24
// console.log("5" + 1) // 51
// console.log(100 + "100") //100100






// function number() {
// 	console.log(42)
// }

// number()

// let lap1 = 34 
// let lap2 = 33 
// let lap3 = 36 

// function laptime() {
// 	let totalTime = lap1 + lap2 + lap3
// 	console.log(totalTime)
// }

// laptime()


// let lapsCompleted = 0

// function incrementLap() {
// 	lapsCompleted = lapsCompleted + 1 
// }

// incrementLap()
// incrementLap()
// incrementLap()

// console.log(lapsCompleted)




// let welcomeEl = document.getElementById('welcome-el')

// console.log(welcomeEl)

// let name = "Lilian"

// let greeting = "Hello, welcome back "

// welcomeEl.innerText = greeting + name 

// // function welcome() {
// // 	message = greeting + ", " + name 
// // 	welcomeEl.innerText = message 
// // 	console.log(message)
// // }

// // welcome()

// welcomeEl.innerText += " emoji"
























