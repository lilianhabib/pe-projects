
// import information from './module.js';

import { fileURLToPath } from 'url';
import { dirname } from 'path';

const __filename = fileURLToPath(import.meta.url)
const __dirname = dirname(__filename)



// import {
// 	tripple,
// 	double,
// 	half,
//  } from './math.js' 

//  //const {tripple, double, half } = require('./math');

// console.log( tripple(3) );

// console.log(double(3) ); 

// console.log(half(3) ); 



// import reverse  from 'lodash/reverse.js'; 

// const exampleArray = [1,2,3,4,5]; 

// const reversed = reverse(exampleArray);

// console.log(reversed)


import fileSystem from 'node:fs';
import http from 'node:http';


//create css files 

// concatenate them all into a single file 

// 1 http request to link css 
function read(dirname, onFileContent, callback) {
	fileSystem.readdir('css', function(error, files) {
		if (error) {
			return console.error(error) 
		}

		files.forEach(function(file) {
			fs.readFile
		})


	})
}
