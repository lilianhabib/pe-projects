import thePage from './thePage.js';

const $mainView = document.querySelector('[data-outlet="main"]');


function changeScreen(view) {

	console.log('change screen to', view);
	$mainView.innerHTML = thePage[view];
};








export {
	$mainView, 
	changeScreen,

}