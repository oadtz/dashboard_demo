var app = require('http').createServer(handler);
var io = require('socket.io')(app);


app.listen(6002, function() {
    console.log('Server is running!');
});

function handler(req, res) {
    res.writeHead(200);
    res.end('');
}
