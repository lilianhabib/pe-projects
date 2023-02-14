//rendering on webpage 

var tutorList = []; 
var tutorId = 1; 

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');


function add(content) {
	var tutor = {
		id: `a${tutorId++}`, 
		content: content, 
		complete: false, 
	}

	tutorList = [...tutorList, tutor]; 
	renderTutorList(tutorList)
}

function remove(id) {
	const findToRemove = tutorList.filter( function(tutor){
		return tutor.id != id; 
	});
	tutorList = [...findToRemove]; 
	renderTutorList(tutorList);
}

function complete(id) {
	for (let i = 0; i < tutorList.length; i++) {
		if (tutorList[i] == id) {
			tutorList[i].complete = true;
		}
	}
	renderTutorList(tutorList);
}


function renderTutor(tutor) {
	return `
		<li data-id='${tutor.id}'> 
			<tutor class='${tutor.complete ? "complete" : ""}'> 
				<h2>${tutor.content}</h2> 

				<actions> 
					<button>Remove</button>
					<button>Complete</button> 
				</actions>
			</tutor> 
		</li> 
	`; 
}

function renderTutorList(tutorList){
	var template = "<ul>";
	tutorList.forEach(function(student){
		template += renderTutor(student);
	}); 
	template += "</ul>"; 
	$output.innerHTML = template; 
}

add("Stella");

$form.addEventListener('submit', function(event){
	event.preventDefault(); 
	add($input.value);
	$input.value = ""; 
	console.log("Student: ", tutorList);
});

$output.addEventListener('click', function(event){

	if (event.target.textContent == "Remove"){

		const id = event.target.closest('li').dataset.id;
		remove(id); 
	}

	if (event.target.textContent == "Complete") {

		const id = event.target.closest('li').dataset.id;
		complete(id); 
	}
})


