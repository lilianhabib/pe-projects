const directory = process.argv[2];
const extension = `.` + process.argv[3]; 

const path = require('node:path');
const fileSystem = require('fs');


module.exports = function (directory, extension, callback) {
	fileSystem.readdir(directory, function (error, data) {
		if (error) { return callback(error) }

		let filtered = [];

		data.forEach( function(item) {
			if (path.extname(item) === `.${extension}`) {
				filtered.push(item);
			}
		})

		callback(null, filtered)
	})

    
}

// const fileSystem = require ('fs');
// const path = require ('node:path');

// module.exports = function(directory, extension, callback) {
// 	fileSystem.readdir(directory, function(error, files) {
// 		if (error) {return callback(error)} 

// 		let filtered = []; 

// 		files.forEach ( function(file) {
// 			if ( path.extname(file) === `.${extension}` ) { 
// 				filtered.push(file)
// 			}
// 		})

// 		callback(null, filtered);
// 	})
// }


    



    // const fs = require('fs')
    // const path = require('path')
    
    // module.exports = function (dir, filterStr, callback) {
    //   fs.readdir(dir, function (err, list) {
    //     if (err) {
    //       return callback(err)
    //     }
    
    //     list = list.filter(function (file) {
    //       return path.extname(file) === '.' + filterStr
    //     })
    
    //     callback(null, list)
    //   })
    // }

