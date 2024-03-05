<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: ../../index.php");
    die();
}

include_once("../plantillas/cabeceras.php");
?>

<body>

<div class="wrapper container mt-5">
    <h2 style="color: black;">Añadir Tarea</h2>
    <form action="create.php" method="POST" class="form">
        <button type="submit" class="btn btn-dark">Añadir</button>
    </form>
</div>

<?php

if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'administrador') { //si la variable 'rol' está definida y ademas es igual a 'administrado' 
    ?>
    <div class="wrapper container mt-5">
        <h2 style="color: black;">Buscar Tarea</h2>
        <form action="read.php" method="POST" class="form">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
    </div>

    <div class="wrapper container mt-5">
        <h2 style="color: black;">Actualizar Tarea</h2>
        <form action="update.php" method="POST" class="form">
            <button type="submit" class="btn btn-dark">Actualizar</button>
        </form>
    </div>

    <div class="wrapper container mt-5">
        <h2 style="color: black;">Borrar Tarea</h2>
        <form action="delete.php" method="POST" class="form">
            <button type="submit" class="btn btn-dark">Borrar</button>
        </form>
    </div>
    <?php
}
?>

</body>

<?php
include_once("../plantillas/footer.php");
?>
