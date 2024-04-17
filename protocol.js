const http = require('http');
const port = 4223;

const server = http.createServer((req, res) => {
  res.writeHead(200, {'Content-Type': 'text/html'});
  
  res.write('<h1>Service worked !</h1>');
  res.end(); 
});

server.listen(port, (err) => {
  if (err) {
    return console.log('Error -> ', err);
  }
  
  console.log(`the server is running now to ${port}`);
});
