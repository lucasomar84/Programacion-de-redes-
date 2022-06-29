import socket   
import threading


host = '127.0.0.1'
port = 55555

servidor = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

servidor.bind((host, port))
servidor.listen()
print(f"el servidor se ejecuto en {host}:{port}")


clientes = []
usernames = []

def broadcast(message, _client):
    for cliente in clientes:
        if cliente != _client:
            cliente.send(message)

def handle_messages(cliente):
    while True:
        try:
            message = cliente.recv(1024)
            broadcast(message, cliente)
        except:
            index = clientes.index(cliente)
            username = usernames[index]
            broadcast(f"ChatBot: {username} esta desconectado".encode('utf-8'), cliente)
            clientes.remove(cliente)
            usernames.remove(username)
            cliente.close()
            break


def receive_connections():
    while True:
        cliente, address = servidor.accept()

        cliente.send("@username".encode("utf-8"))
        username = cliente.recv(1024).decode('utf-8')

        clientes.append(cliente)
        usernames.append(username)

        print(f"{username} esta conectado en {str(address)}")

        message = f"ChatBot: {username} unio al chat".encode("utf-8")
        broadcast(message, cliente)
        cliente.send("esta conectado al servidor".encode("utf-8"))

        thread = threading.Thread(target=handle_messages, args=(cliente,))
        thread.start()

receive_connections()

