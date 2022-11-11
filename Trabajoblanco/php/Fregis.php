<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registro</title>

</head>
<body>


        <form method="post">
            <main class="contenido">
                <section>
                    <form method="post" name="signup-form">
                                    <div class="form-element">
                                        <label>Nombre</label><br>
                                        <input type="text" name="nombre" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Apellido</label><br>
                                        <input type="text" name="apellido"  required />
                                    </div>

                                    <div class="form-element">
                                        <label>Edad</label><br>
                                        <input type="text" name="edad" pattern="[0-9]+" required />
                                    </div>

                                    <div class="form-element">
                                        <label>DNI</label><br>
                                        <input type="text" name="dni" pattern="[0-9]+" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Email</label><br>
                                        <input type="email" name="email" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Nombre de Usuario</label><br>
                                        <input type="text" name="username" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Telefono</label><br>
                                        <label>Nombre de Usuario</label>
                                        <input type="text" name="usuario" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Contraseña</label><br>
                                        <input type="password" name="contraseña" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Confirmar contraseña</label>
                                        <input type="password" name="confircontraseña" required />
                                    </div>

                                    <button type="submit" name="mandar" value="register">Registrar</button>
                    </form>
                       <?php
                            include("crearus.php");
                        ?>
                </section>
            </main>
        </form>

</body></html>
