const fs = require('fs'); 
const path = process.argv[2]; 



const data = fs.readFileSync(path, 'utf8')

const string = data.split('\n').length -1 

console.log(string)



   // const fs = require('fs')
    
   //  const contents = fs.readFileSync(process.argv[2])
   //  const lines = contents.toString().split('\n').length - 1
   //  console.log(lines)
    
   //  // note you can avoid the .toString() by passing 'utf8' as the
   //  // second argument to readFileSync, then you'll get a String!
   //  //
   //  // fs.readFileSync(process.argv[2], 'utf8').split('\n').length - 1








































































// const filesystem = require ('fs');

// const path = process.argv[2];

// const buffer = filesystem.readFileSync(path);

// const paragraphs = buffer.toString().split('\n');

// console.log(paragraphs.length - 1);



// // an alternate solution 
//     // const fs = require('fs')
    
//     // const contents = fs.readFileSync(process.argv[2])
//     // const lines = contents.toString().split('\n').length - 1
//     // console.log(lines)