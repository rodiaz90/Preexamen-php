<?php
class Conexion{
    private $servidor = "localhost"; // Definición de propiedades privadas que contienen los datos de conexión.
    private $usuario = "root";
    private $clave = "";
    private $bdd ="hito";
    protected $conexion; // Propiedad protegida que almacena el objeto de conexión.

    public function __construct(){ // Constructor de la clase, se ejecuta al instanciar un objeto de la clase.
        $this->conexion = new mysqli($this->servidor, // Creación del objeto de conexión mysqli con los datos proporcionados.
                                     $this->usuario,
                                     $this->clave,
                                     $this->bdd);
        if($this->conexion->connect_error){ // Verificación de la conexión. Si hay un error, termina la ejecución del script.
            die("Conexión Fallida". $this->conexion->connect_error);
        }
        $this->conexion->set_charset("UTF8");  // Configuración del conjunto de caracteres a UTF-8 para la conexión.
        echo "Conexión correcta.".PHP_EOL; // Mensaje indicando que la conexión fue exitosa.
    }

    public function get_conexion(){ // Método público que devuelve el objeto de conexión para su uso externo.
        return $this->conexion;
    }

}

?>