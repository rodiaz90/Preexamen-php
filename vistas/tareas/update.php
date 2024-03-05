<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("location: ../../index.php");
    die();
}

include_once("../plantillas/cabeceras.php");

?>

<div class="wrapper container mt-5">
    <h2 style ="color: black;">Actualizar tarea</h2>
    <form action="../../controladores/tareasControlador.php" method="POST" class="form">
          
        <div style ="color: black;" class="mb-3">
            <label for="id_tarea" class="form-label">id</label>
            <input type="text" class="form-control" id="id_tarea" name="id_tarea" required>
            <input type="hidden" id="accion" name="accion" value="update">
        </div>

        <div style ="color: black;" class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select type="text" class="form-control" id="estado" name="estado" required>
                <option value="Pendiente">Pendiente</option>
                <option value="Termiando">Terminado</option>
        </select>
        </div>

        <button type="submit" class="btn btn-dark">Actualizar</button>
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