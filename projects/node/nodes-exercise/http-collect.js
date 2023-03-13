const fileSystem = require('fs');
const http = require('http');
const bl = require('bl');
const url = process.argv[2]


http.get(url, function(response) {
	response.pipe(bl(function (err, data) {
		if (err) { return callback(err)}

		console.log(data.length);
		console.log(data.toString());
		
	}))
})


    // const http = require('http')
    // const bl = require('bl')
    
    // http.get(process.argv[2], function (response) {
    //   response.pipe(bl(function (err, data) {
    //     if (err) {
    //       return console.error(err)
    //     }
    //     data = data.toString()
    //     console.log(data.length)
    //     console.log(data)
    //   }))
    // })

