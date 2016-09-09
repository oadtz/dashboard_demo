
var http = require("http"),
	url = require("url");



var datafeedHost = "ichart.finance.yahoo.com";
var path = "/table.csv?s=LPH.BK&a=7&b=30&c=2016&d=8&e=9&f=2016&g=d&ignore=.csv";


http.createServer(function(request, response) {
	var uri = url.parse(request.url, true);
	var action = uri.pathname;

	var req = http.request('http://ichart.finance.yahoo.com/table.csv?s=BXB.AX&a=7&b=30&c=2016&d=8&e=9&f=2016&g=d&ignore=.csv', function (res) {
		var result = '';
		console.log ('connected');
		res.on('data', function (chunk) {
			result += chunk
		});

		res.on('end', function () {
			if (res.statusCode !== 200) {
				//callback('');
				console.log (res.statusCode);
				return;
			}

			console.log  (result)
		});
	});

	req.on('socket', function (socket) {
		console.log ('connecting....');
		socket.setTimeout(50000);  
		socket.on('timeout', function() {
			console.log('timeout');
			req.abort();
		});
	});
	
	req.on('error', function(e) {
		console.log('Problem with request: ' + e.message);
	});
	
	req.end();

}).listen(8888);