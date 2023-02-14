//render on web page 


var list = []; 
var listId = 1; 

const $form = document.querySelector('form'); 
const $input = $form.querySelector('input');
const $output = document.querySelector('output');




function add(content) {
	var travel = {
		id: `a${listId++}`,
		content:content,
		complete: false,
	};

	list = [...list, travel]; //get the list and add the travel content 
	renderList(list);

}

function remove(id) {
	const filtered = list.filter( function(travel){
		return travel.id != id; 
	});
	list = [...filtered]; 
	renderList(list);
}



function complete(idComplete) {
	for (let i = 0; i < list.length; i++) {
		if (list[i].id == idComplete) {
			list[i].complete = true;
		}
	}
	renderList(list);
 
}



function renderTravel(travel) {
	return `
		<li data-id='${travel.id}'> 
			<travel class='${travel.complete ? "complete" : ""}'>
				<h2>${travel.content}</h2>

				<actions> 
					<button>Remove</button> 
					<button>Complete</button>
				</actions> 
			</travel>
		</li>
	`;
}

function renderList(list) {
	var template = "<ul>";
	list.forEach (function(travel) {
		template += renderTravel(travel);
	});
	template += "</ul>"; 
	$output.innerHTML = template;
}

add("Japan");



$form.addEventListener('submit', function(event){
	event.preventDefault();
	add( $input.value); 
	$input.value = ""; 
	console.log("Places:", list); 

});

$output.addEventListener('click', function(event){
	
	if (event.target.textContent == "Remove") {

		const id = event.target.closest('li').dataset.id;
		remove(id);
	}

	if (event.target.textContent == "Complete") {

		const id = event.target.closest('li').dataset.id;
		complete(id);
	}
})
























