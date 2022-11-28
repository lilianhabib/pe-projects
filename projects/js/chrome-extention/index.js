let myLeads = []

let inputEl = document.querySelector("#input-el")

const inputBtn = document.getElementById("input-btn")

const ulEl = document.getElementById("ul-el")

const deleteBtn = document.querySelector("#delete-btn")

const tabBtn = document.querySelector("#tab-btn")

const leadsFromLocalStorage = JSON.parse(localStorage.getItem("myLeads"))

if (leadsFromLocalStorage) {
	myLeads = leadsFromLocalStorage
	render(myLeads)
}




tabBtn.addEventListener("click", function(){
  	chrome.tabs.query({active: true, currentWindow: true}, function (tabs){
  		myLeads.push(tabs[0].url)
		localStorage.setItem("myLeads", JSON.stringify(myLeads))
		render(myLeads)
  	})


})




function render(leads) { //Low reusability because it will only render the variable "myLeads"
	let listItems = ""
	for (let i = 0; i < leads.length; i ++) { // when changed to leads, the body of the function has no relation to "let myLeads = []" array anymore. 
 	listItems += `<li>
 					<a href='${leads[i]}' target='_blank'>   
 						${leads[i]} 
 					</a>
 				  </li>`

 }
 	ulEl.innerHTML = listItems 
}


deleteBtn.addEventListener("dblclick", function(){
	localStorage.clear()
	myLeads = []
	render(myLeads)
})

inputBtn.addEventListener("click", function(){
	myLeads.push(inputEl.value)
	inputEl.value = ""

	localStorage.setItem("myLeads", JSON.stringify(myLeads))

	render(myLeads)
})






