

const directory = process.argv[2];
const extension = process.argv[3];
const fileSystem = require('fs'); 
const path = require('node:path');



fileSystem.readdir(directory, function functionToRunLater(error,list) {
    if (error) {
        return console.error(error) 
    }


   
    list.forEach( function(item) {
        if (path.extname(item) === `.${extension}`) {
            console.log(item);
        }
    })
})



// const fileSystem = require('fs');
// const path = require ('node:path');
 
// const directory = process.argv[2]; 
// const extension = process.argv[3]; 

// fileSystem.readdir(directory, function(error, list) {
// 	list.forEach ( function(item) {
// 		if ( path.extname(item) == `.${extension}`) {
// 			console.log(item);
// 		}
// 	});
// });


// //alternative solution 
//     // const fs = require('fs')
//     // const path = require('path')
    
//     // const folder = process.argv[2]
//     // const ext = '.' + process.argv[3]
    
//     // fs.readdir(folder, function (err, files) {
//     //   if (err) return console.error(err)
//     //   files.forEach(function (file) {
//     //     if (path.extname(file) === ext) {
//     //       console.log(file)
//     //     }
//     //   })
//     // })