<?php
require_once "insert_read.php";


$id = $_POST['id'];
$img = $_FILES['img'];

$archivo = $img['tmp_name'];
$rutaLocalImagenes = "C:/xampp\htdocs\blanco/imagenes-locales/" . $nombreImagen;
move_uploaded_file($archivo, $rutaLocalImagenes);


INSERT INTO $consulta = "CALL subirFoto($id,'$nombreImagen')";

consultar($consulta);
