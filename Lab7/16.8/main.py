from http.server import HTTPServer, SimpleHTTPRequestHandler

class AjaxRequestHandler(SimpleHTTPRequestHandler):
    def end_headers(self):
        self.send_header('Access-Control-Allow-Origin', '*')
        self.send_header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        self.send_header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept')
        SimpleHTTPRequestHandler.end_headers(self)

def run(server_class=HTTPServer, handler_class=AjaxRequestHandler, addr="localhost", port=8000):
    server_address = (addr, port)
    httpd = server_class(server_address, handler_class)
    print(f"Starting server on http://{addr}:{port}")
    httpd.serve_forever()

if __name__ == "__main__":
    run()
