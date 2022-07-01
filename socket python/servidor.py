import socket
host = "LocalHost"
port = 5656
server=socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind((host,port))
server.listen(1)
print (" el servidor esta esperando la conexion")
active, addr= server.accept()

while True:
    recibido=active.recv(1024)
    print ("cliente: ", recibido.decode(encoding="ascii", errors="ignore"))
    enviar=input("server: ")
    active.send(enviar.encode(encoding="ascii", errors="ignore"))
active.close()