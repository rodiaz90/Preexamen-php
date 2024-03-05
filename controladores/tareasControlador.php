<?php

require_once("../modelos/class_tareas.php");

$accion = isset($_POST['accion']) ? $_POST['accion'] : ''; // Verifica si la clave 'accion' está presente en la matriz $_POST. Si está presente, asigna su valor a la variable $accion; de lo contrario, asigna una cadena vacía.
$name = isset($_POST['name']) ? $_POST['name']:'';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$id_tarea = isset($_POST['id_tarea']) ? $_POST['id_tarea']:'';
$fecha_tarea = isset($_POST['fecha_tarea']) ? $_POST['fecha_tarea']:'';
$tarea = isset($_POST['tarea']) ? $_POST['tarea']:'';
$estado = isset($_POST['estado']) ? $_POST['estado']:'';

$usuario =new Tarea();

switch ($accion){
    case "create":
        if($usuario->insertar($fecha_tarea, $tarea, $estado)){
            echo "TAREA AÑADIDA CORRECTAMENTE".PHP_EOL;
            header("location: ../vistas/plantillas/exito.php");
        }else{
            echo "¡¡¡¡ERROR AL AÑADIR LA TAREA!!!!!".PHP_EOL;
            header("location: ../vistas/plantillas/error.php");
        }
        break;
    case "read":
        $registro = $usuario->read($id_tarea);

        if($registro){
            echo "TAREA MOSTRADA CORRECTAMENTE".PHP_EOL;
            echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Fecha</th>";
                echo "<th>Tarea</th>";
                echo "<th>Estado</th>";
                echo "</tr>";

            while ($row = $registro->fetch_assoc()) { 
              
                echo "<tr>";
                echo "<td>" . $row['id_tarea'] . "</td>";
                echo "<td>" . $row['fecha_tarea'] . "</td>";
                echo "<td>" . $row['tarea'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "</tr>";
            }
                echo "</table>";
        }else{
            echo "¡¡¡¡ERROR LA TAREA!!!!!".PHP_EOL;
            header("location: ../vistas/plantillas/error.php");
        }
        break;

       
    case "update":
        if($usuario->update($id_tarea, $estado)){
            echo "TAREA ACTUALIZADA CORRECTAMENTE".PHP_EOL;
            header("location: ../vistas/plantillas/exito.php");
            
        }else{
            echo "¡¡¡¡ERROR AL ACTUALIZAR LA TAREA!!!!!".PHP_EOL;
            header("location: ../vistas/plantillas/error.php");
        }
        break;
    case "delete":
        if($usuario->delete($id_tarea)){
            echo "TAREA BORRADA CORRECTAMENTE".PHP_EOL;
            header("location: ../vistas/plantillas/exito.php");
        }else{
            echo "¡¡¡¡ERROR AL BORRAR LA TAREA!!!!!".PHP_EOL;
            header("location: ../vistas/plantillas/error.php");
        }
        break;
}








?>