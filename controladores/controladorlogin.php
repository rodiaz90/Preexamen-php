<?php
session_start();                                   

require_once ("../modelos/class_tareas.php");       

$login = $_POST['usuario'];                         
$password = $_POST['password'];                     

$file = fopen('AAA_datos.txt', 'w');                
fwrite($file, 'Usuario: '.$login.PHP_EOL);          
fwrite($file, 'Contraseña: '.$password.PHP_EOL);    
fclose($file);                                      

$usuario = new Tarea();                            

$encontrados = $usuario->BuscarUsuarioLogin($login, $password); 

if($encontrados > 0){                               
    $_SESSION['usuario'] = $login;

    if ($login === 'admin') {
        $_SESSION['rol'] = 'administrador';
        header("location:../vistas/tareas/menu.php");
    } else {
        header("location:../vistas/tareas/menu.php");
    }
} else {                                              
    header("location:../index.php");
}
?>
