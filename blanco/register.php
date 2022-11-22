<?php
include('bdreglogin.php');
session_start();

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $con->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">La dirección de correo electrónico ya está registrada</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $con->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Ya te inscribiste</p>';
        } else {
            echo '<p class="error"> Error al  registrarse</p>';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <form method="post" action="" name="signup-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Email</label>
            <input type="email" name="email" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="register" value="register">Register</button>
        <button type="button" name="button"><a href="/blanco/login.php">volver al login</a>

    </form>

  </body>
</html>
