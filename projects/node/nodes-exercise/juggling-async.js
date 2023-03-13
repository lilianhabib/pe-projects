const http = require('http'); 
const bl = require('bl');
const url = process.argv[2];
const url2= process.argv[3];
const url3 = process.argv[4];
const results = [] 
var count = 0 


function loop() {
	for (let i = 0; i < 3; i++) {
		console.log(results[i]);
	}
}


function getUrl(index) {
	http.get(process.argv[2 + index], function(response) {
		response.pipe(bl(function(error, data) {
			if (error) { 
				return callback(error)
			}

			results[index] = data.toString();
			count ++ 

			if (count === 3) {
				loop();
			}
		}))

	})
}

	for (let i = 0; i < 3; i ++) {
		getUrl(i);
	}

	


 



    // const http = require('http')
    // const bl = require('bl')
    // const results = []
    // let count = 0
    
    // function printResults () {
    //   for (let i = 0; i < 3; i++) {
    //     console.log(results[i])
    //   }
    // }
    
    // function httpGet (index) {
    //   http.get(process.argv[2 + index], function (response) {
    //     response.pipe(bl(function (err, data) {
    //       if (err) {
    //         return console.error(err)
    //       }
    
    //       results[index] = data.toString()
    //       count++
    
    //       if (count === 3) {
    //         printResults()
    //       }
    //     }))
    //   })
    // }
    
    // for (let i = 0; i < 3; i++) {
    //   httpGet(i)
    // }























// callback/executor allows other code to run in the meantime. This is executed immediately after a promise is created. 

// node promises - 3 states - 
// pending - initial state that occurs when a promise is called. The function continues to run until the promise is completed. When the function is completed, it will end in either resolved or rejected 
//resolved - promise was successful 
//rejected - promise was denied 




