<?php
class conexion {

    // atributos
    private $servirdor = 'localhost';
    private $usuario = 'checkealo';
    private $password = 'checkealo';
    private $nombreBasedeDatos = 'chekealo';
    protected $llamarAdmin;
    protected $seguro;

    //constructor

    function __construct()
    {
        // mysqli es un llamado a la base de datos y te exige los parametros de la clase (atributos)
        $this->llamarAdmin = new mysqli($this->servirdor, $this->usuario, $this->password, $this->nombreBasedeDatos);
        if($this->llamarAdmin->connect_errno){
            die("Error de conexion: (".$this->llamarAdmin->connect_errno.")".$this->llamarAdmin->connect_errno );
        }
    }

    public function proteger_texto($texto){
        
        // strip_tags le quita al parametro todas las etiquetas de html
        $this-> seguro = strip_tags($texto);
        // specialchars elimina " / ( ) $ % 
        // strip = podar, quitar, eliminar
        // ent - quotes  ""
        $this-> seguro = htmlspecialchars(trim(stripslashes($texto)), ENT_QUOTES, 'UTF-8');

        return $this->seguro;
    }

    protected function prepare($preparado){
        //realiza la preparacion de la sentencia, si no puede, sale error. si lo logra, lo que sea que haya entrado, vuelve como un objeto tipo MySqli
        if (!($preparado = $this->llamarAdmin->prepare($preparado))){
            die("Error en la consulta: (".$this->llamarAdmin->connect_errno.")".$this->llamarAdmin->connect_error);   
        }
        return $preparado;
    }

    protected function execute($sentencia){
        //cuando sentencia entra en el metodo lo hace como un objeto tipo "mysqli" por lo tanto puede llamar al metodo "execute" en este punto
        if(!$sentencia->execute()){
            die("Error en la ejecución: (".$sentencia->errno.")".$sentencia->error_log );     
        }
        return $sentencia;
    }


}

$conexion = new conexion();
