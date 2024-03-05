<?php
require_once 'class_conexion.php';

class Usuario {

    private $cursor;

    public function __construct() {
        //Realizamos la conexión con la BDD en una sola línea sin utilizar dos variables
        $this->cursor = (new Conexion())->get_conexion();
    }

    public function insertar($name, $mail, $password){

        
        $sql = $this->cursor->prepare("INSERT INTO usuarios (name, mail, password) VALUES (?,?,?)");
        $sql->bind_param("sss", $name, $mail, $password);
        
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
  
}

?>