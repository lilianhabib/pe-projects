const http = require('http');
const fileSystem = require('fs');
const port = process.argv[2];
const file = process.argv[3];

const server = http.createServer( function (request, response) {
	var stream = fileSystem.createReadStream(file).pipe(response)
		
		response.writeHead(200, {'Content-Type': 'text/plain'});
	
});


server.listen(Number(port))


//request - fetch properties such as the header and query-string 
//response - sends data to the client both headers and body





    // const http = require('http')
    // const fs = require('fs')
    
    // const server = http.createServer(function (req, res) {
    //   res.writeHead(200, { 'content-type': 'text/plain' })
    
    //   fs.createReadStream(process.argv[3]).pipe(res)
    // })
    
    // server.listen(Number(process.argv[2]))