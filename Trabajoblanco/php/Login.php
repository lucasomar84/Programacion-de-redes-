<?php
include("conex.php");


if(isset($_POST['mandar'])){
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1){


        $usu    = $_POST['usuario'];
        $contra = $_POST['contraseña'];


        $consulta  = "SELECT * FROM `usuarios` WHERE `contrasena` = '$usu' AND `nusuario` = '$contra' ";
        $resultado = mysqli_query($con,$consulta);

        if($resultado){
            header("location: ../html/pag.html");
            exit();
        }
    }

}





?>
