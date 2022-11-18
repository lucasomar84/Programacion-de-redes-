<?php

include('config.php');
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">la combinación de nombre de usuario y contraseña es incorrecta</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">ya estas registrado</p>';
        } else {
            echo '<p class="error">La combinación de nombre de usuario y contraseña es incorrecta</p>';
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ingresar</title>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <form method="post" action="" name="signin-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>


  </body>
</html>
