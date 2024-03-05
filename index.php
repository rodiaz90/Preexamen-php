<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hito 2</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<body>
    <div class="wrapper">
        <form action="controladores/controladorlogin.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password"placeholder="Contraseña" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
                <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>¿No tienes cuenta? <a href="vistas/usuarios/create.php">Registrarse</a>
                </p>
            </div>
        </form>
    </div>
</body>
</body>
</html>