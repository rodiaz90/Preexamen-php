<?php
require_once 'class_conexion.php';

class Tarea {

    private $cursor;

    public function __construct() {
        //Realizamos la conexión con la BDD en una sola línea sin utilizar dos variables
        $this->cursor = (new Conexion())->get_conexion();
    }

    public function insertar($fecha_tarea, $tarea, $estado){

        
        $sql = $this->cursor->prepare("INSERT INTO tareas (fecha_tarea, tarea, estado) VALUES (?,?,?)"); //Prepara una consulta SQL para ser ejecutada. La consulta es una inserción en la tabla 'tareas' con tres valores a insertar, representados por marcadores de posición ?.
        $sql->bind_param("sss", $fecha_tarea, $tarea, $estado); // Asocia variables a los marcadores de posición en la consulta preparada. En este caso, se asocian tres variables ($fecha_tarea, $tarea, y $estado) con los marcadores de posición en el orden correspondiente. Los tipos de datos esperados para cada variable se especifican con "sss" (todos son cadenas).

        if($sql->execute()){ //Ejecuta la consulta preparada. Si la ejecución es exitosa, devuelve true, indicando que la inserción fue exitosa. De lo contrario, devuelve false. Este control de flujo permite al usuario verificar si la operación de inserción fue exitosa o no.
            return true;
        }else{
            return false;
        }
    }

    public function delete($id_tarea){

        
        $sql = $this->cursor->prepare("DELETE FROM tareas WHERE id_tarea = (?);");
        $sql->bind_param("i", $id_tarea,); 

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function read($id_tarea){

        $sql = "SELECT * FROM tareas WHERE id_tarea = '".$id_tarea."'";

        $resultado =  $this->cursor->query($sql);

        if($resultado){
            return $resultado;
        }else{
            return false;
        }
    }

    public function update($id_tarea, $estado){

        
        $sql = $this->cursor->prepare("UPDATE tareas SET estado = (?) WHERE id_tarea = (?);");
        $sql->bind_param("ss", $estado, $id_tarea); 

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function BuscarUsuarioLogin($name, $password){
        
        $sql = 'SELECT * FROM usuarios WHERE name = "'.$name.'" AND password = "'.$password.'"';

        $file = fopen('AAA_sql.txt', 'w');
        fwrite($file, $sql);
        fclose($file);

        $usuario = $this->cursor->query($sql);

        $encontrados = $usuario->num_rows;

        return $encontrados;
    }   
}

?>