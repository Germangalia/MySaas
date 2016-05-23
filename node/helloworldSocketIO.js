//Create dependencies and socket
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

//Connection the socket
io.on('connection', function(socket){
    //Function name 'hello'
    io.on('hello', function () {
        console.log('Hello World!');
    });
    //Function name 'by'
    io.on('by', function () {
        console.log('By World!');
    });
    //Function name 'off'
    io.on('off', function () {
        console.log('Off World!');
    });
});

//Listen on port 3000
http.listen('3000', function(){
    console.log('Listening on port 3000');
});

//Client
//io.emit('hello');