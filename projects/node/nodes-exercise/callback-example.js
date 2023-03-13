
function processData(data, callback) {
  // do some processing on the data
  const result = data.map(item => item.toUpperCase());
  // call the callback function with the result
  callback(result); // why use callback here when it is called later on when the processData function is called. 
}

// define a callback function
function handleResult(result) {
  console.log(result);
}

// call processData with some data and the callback function
processData(['foo', 'bar', 'baz'], handleResult);





//callback with err and data 
function readFile(filename, callback) {
  fs.readFile(filename, (err, data) => {
    if (err) {
      return callback(err);
    }
    callback(null, data);
  });
}

// usage
readFile('myfile.txt', (err, data) => {
  if (err) {
    console.error(`Error reading file: ${err}`);
  } else {
    console.log(`File contents: ${data}`);
  }
});




// another example 

var fs = require('fs')
var myNumber = undefined

function addOne(callback) {
  fs.readFile('number.txt', function doneReading(err, fileContents) {
    myNumber = parseInt(fileContents)
    myNumber++
    callback()
  })
}

function logMyNumber() {
  console.log(myNumber)
}

addOne(logMyNumber)





























