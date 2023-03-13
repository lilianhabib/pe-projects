
const net = require('node:net');
const port = process.argv[2];

var server = net.createServer(function( socket) {
	

	var date = new Date(); 

	var month = date.getMonth() + 1

	var formatMonth = month.toString().padStart(2, '0');
	var year = date.getFullYear().toString().padStart(2, '0');
	var day = date.getDate().toString().padStart(2, '0');
	var hours = date.getHours().toString().padStart(2, '0')
	var minutes = date.getMinutes().toString().padStart(2, '0')

	const formatDate = `${year}-${formatMonth}-${day} ${hours}:${minutes}`


	socket.write(formatDate);
	socket.end('\n');

});

server.listen(port);













// server.on('error', function (error) {
// 		console.error(error)
// 	})


//alternate solution

    // 'use strict'
    // const net = require('net')
    
    // function zeroFill (i) {
    //   return (i < 10 ? '0' : '') + i
    // }
    
    // function now () {
    //   const d = new Date()
    //   return d.getFullYear() + '-' +
    //     zeroFill(d.getMonth() + 1) + '-' +
    //     zeroFill(d.getDate()) + ' ' +
    //     zeroFill(d.getHours()) + ':' +
    //     zeroFill(d.getMinutes())
    // }
    
    // const server = net.createServer(function (socket) {
    //   socket.end(now() + '\n')
    // })
    
    // server.listen(Number(process.argv[2]))