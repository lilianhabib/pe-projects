


const fileSystem = require('fs'); 
const path = process.argv[2];



fileSystem.readFile(path, 'utf8', function functionToRunLater(error, data) {
    if (error) {
        return console.error(error)
    }

    console.log(data.split('\n').length - 1); 

    
})




    


    





















































// const path = process.argv[2];
// const fileSystem = require('fs');

// fileSystem.readFile(path, function(error, data) {
// 	if (!error) {
// 		console.log(data.toString().split('\n').length - 1) 
// 	}
// });


// //another solution

// //     const fs = require('fs')
//     // const file = process.argv[2]
    
//     // fs.readFile(file, function (err, contents) {
//     //   if (err) {
//     //     return console.log(err)
//     //   }
//     //   // fs.readFile(file, 'utf8', callback) can also be used
//     //   const lines = contents.toString().split('\n').length - 1
//     //   console.log(lines)
//     // })
