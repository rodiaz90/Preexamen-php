<?php
session_start(); //Inicia o reanuda la sesión en PHP. Es crucial para trabajar con variables de sesión

if(!isset($_SESSION['usuario'])){           //Verifica si la variable de sesión 'usuario' no está establecida o es nula.
    header("location: ../../index.php");    //Redirige al usuario a la página si la condición anteriror es verdadera.
    die();                                  //Detiene la ejecución del script
}

include_once("../plantillas/cabeceras.php");

?>

    <div class="wrapper container mt-5">
        <h2 style ="color: black;">Añadir Tarea</h2>
        <form action="../../controladores/tareasControlador.php" method="POST" class="form">
            <div style ="color: black;" class="mb-3">
                <label for="fecha_tarea" class="form-label">Fecha</label>
                <input type="text" class="form-control" id="fecha_tarea" name="fecha_tarea" required>
                <input type="hidden" id="accion" name="accion" value="create">
            </div>
            <div style ="color: black;" class="mb-3">
                <label for="tarea" class="form-label">Tarea</label>
                <input type="text" class="form-control" id="tarea" name="tarea" required>
            </div>
            <div style ="color: black;" class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select type="text" class="form-control" id="estado" name="estado" required>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Termiando">Terminado</option>
            </select>
            </div>

            <button type="submit" class="btn btn-dark">Añadir</button>
        </form>
    </div>

    <div class="wrapper container mt-5">
        <form action="menu.php">
            <button type="submit" class="btn btn-dark" href="menu.php">Volver</button>
        </form>
    </div>
<?php

include_once("../plantillas/footer.php");


?>

