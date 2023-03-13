

import http from 'node:http';
import fs from "node:fs";

const server = http.createServer( function (request, response) {
	let page = "pages/"; //default


	if (request.url == "/") {
		page += "home.html";
	}

	if (request.url == "/about") {
		page += "about.html";
	}

	if (request.url == "/contact") {
		page += "contact.html";
	}

	if (request.url == "/404") {
		page += "404.html";
	}



	fs.readFile(page, function (error, data) {
		if (error) {
			return console.error(error)
		}
			response.statusCode = 200
			response.setHeader('Content-Type', 'text/html')
			response.write (data.toString());
			response.end()
		})

});

const PORT = 1982; 
server.listen(1982, 'localhost', function () {
	console.log(`Listening at http://localhost:${PORT}`); 
});
