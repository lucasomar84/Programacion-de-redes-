<?php

$conn = include('conexion.php');

$nombre = $_GET['nombre'];
$email = $_GET['email'];
$contraseña = $_GET['contraseña'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $consultar = "INSERT INTO `user` (`Usuario`, `Mail`, `Contraseña`) VALUES ('$nombre','$email','$contraseña')";
  if ($conn->query($consultar) === TRUE) {
    echo "New user created successfully";
  } else {
    echo $conn->error;
  }
}
