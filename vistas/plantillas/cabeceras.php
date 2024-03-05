<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link rel="stylesheet" href="../../StylesNoIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">  
    <h1 style="margin: 10px; margin-right: auto; color: white">Bienvenid@ <?php echo $_SESSION['usuario']; ?></h1>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button style="margin: 10px;" type="button" class="btn btn-light" href="logout.php">
                <a href="../../controladores/logoutControlador.php" style ="color: black; text-decoration: none;">Desconectar</a></button>
        </div>
</nav>
</header>

