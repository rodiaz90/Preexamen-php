<?php
    session_start(); // Inicia o reanuda la sesión actual.
    if(session_destroy()){ // Destruye toda la información asociada con la sesión actual. No destruye variables globales asociadas con la sesión. Devuelve true si la destrucción de la sesión es exitosa.
        header("location: ../index.php"); // Redirecciona al usuario a la página ../index.php después de destruir la sesión.
    }
?>s