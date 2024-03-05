<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link rel="stylesheet" href="../../styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper container mt-5">
    <form action="../../controladores/usuarioControlador.php" method="POST">
    <h1>Bienvenido</h1>
    <h2 style="text-align: center;" >Create una cuenta</h2>
        <div class="input-box">
            <label for="name" class="form-label"></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"  required>
            <input type="hidden" id="accion" name="accion" value="create">
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <label for="mail" class="form-label"></label>
            <input type="text" class="form-control" id="mail" name="mail" placeholder="Mail" required>
            <i class='bx bxs-envelope' ></i>
        </div>
        <div class="input-box">
            <label for="password" class="form-label"></label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Contraseña" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <button type="submit" class="btn btn-dark">Añadir</button>
        <button type="button" class="btn btn-dark" style="margin-top: 5px;"><a style="color: #333; text-decoration: none;" href="../../index.php">Volver</a></button>
    </form>
</div>

</body>
</body>
</html>
