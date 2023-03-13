
const myModule = require('./mymodule'); 
const directory = process.argv[2];
const extension = process.argv[3]; 

myModule(directory, extension, function(error, files) {

    files.forEach( function(item) {
        console.log(item);
    })
    
})






// const myModule = require('./mymodule.js');

// const dir = process.argv[2];
// const ext = process.argv[3];
// myModule(dir, ext, function(error, files) {
// 	files.forEach( function(file) {
// 		console.log(file);
// 	})
// });



//     // const filterFn = require('./solution_filter.js')
//     // const dir = process.argv[2]
//     // const filterStr = process.argv[3]
    
//     // filterFn(dir, filterStr, function (err, list) {
//     //   if (err) {
//     //     return console.error('There was an error:', err)
//     //   }
    
//     //   list.forEach(function (file) {
//     //     console.log(file)
//     //   })
//     // })