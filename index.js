var body = document.querySelector('body'); 

var toggle = document.querySelector('button'); 


function toggleTheme(){
	body.classList.toggle('fancy'); 
}

toggle.addEventListener('mouseover', toggleTheme); 



