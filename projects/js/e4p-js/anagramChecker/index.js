function isAnagram (one, two) {
	if (one.length == two.length) {
		console.log ("true");
	} else {
		console.log ("false"); 
	} 

	var one = one.split('').sort().join('');
	var two = two.split('').sort().join('');
	if (one == two) {
		console.log("true");
	} else {
		console.log("false");
	}
};

isAnagram ("tone", "note");


