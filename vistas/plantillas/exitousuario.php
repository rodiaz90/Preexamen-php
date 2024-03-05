<?php
session_start(); //Inicia o reanuda la sesión en PHP. Es crucial para trabajar con variables de sesión

if(!isset($_SESSION['usuario'])){           //Verifica si la variable de sesión 'usuario' no está establecida o es nula.
    header("location: ../../index.php");    //Redirige al usuario a la página si la condición anteriror es verdadera.
    die();                                  //Detiene la ejecución del script
}

include_once("../plantillas/cabeceras.php");

?>

    <div class="wrapper container mt-5">
        <h1 style ="color: black;">Usuario registrado con éxito</h1>      
            <button type="button" class="btn btn-primary" style="margin-top: 5px;"><a style="color: #333; text-decoration: none;" href="../tareas/menu.php">Volver</a></button>
    </div>

<?php

include_once("../plantillas/footer.php");


?>