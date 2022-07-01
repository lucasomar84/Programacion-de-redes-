import socket
host = "LocalHost"
port = 5656
objsocket=socket.socket(socket.AF_INET, socket.SOCK_STREAM)
objsocket.connect((host,port))
print ("se inicio cliente")
while True:
    enviar= input("Cliente: ")
    objsocket.send(enviar.encode(encoding="ascii", errors="ignore"))
    recibido= objsocket.recv(1024)
    print ("servidor", recibido.decode(encoding="ascii", errors="ignore"))
objsocket.close()