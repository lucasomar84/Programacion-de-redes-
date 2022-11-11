<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Iniciar de sesión</title>

</head>

<body>
<section class = "contenido-login">
    <form class = "caja1" method="post">
        <input class = "ingrese-dato-login" type="text"   name="usuario"      placeholder="usuario"><br>
        <input class = "ingrese-dato-login" type="text"   name="contraseña"   placeholder="contraseña"><br>
        <input  type="submit" name="mandar">
    </form>

    <div class = "caja2">
        <a href="registroDeUsuario.php"><button class ="boton-del-login">Crear Usuario</button></a><br>

        <a href="nuevacontra.html"><button class ="boton-del-login">¿Olvidaste tu contraseña?</button></a>
    </div>



</section>
    <a href="FormularioRegistro.php"><button>Crear usuario</button></a>



    <?php
    include("Login.php");
    ?>

</body>
</html>
