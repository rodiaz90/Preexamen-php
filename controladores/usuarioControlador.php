<?php

require_once("../modelos/class_usuario.php");

$accion = isset($_POST['accion']) ? $_POST['accion'] : '';
$name = isset($_POST['name']) ? $_POST['name']:'';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';

$usuario =new Usuario();

switch ($accion){
    case "create":
        if($usuario->insertar($name, $mail, $password)){
            echo "USUARIO AÑADIDO CORRECTAMENTE".PHP_EOL;
            header("location: ../vistas/plantillas/exitousuario.php");
        }else{
            echo "¡¡¡¡ERROR AL AÑADIR EL USUARIO!!!!!".PHP_EOL;
            header("location: ../vistas/plantillas/errorusuario.php");
        }
        break;
    }
?>
