<?php require 'ConexionCs.php';
class registrar extends conexion {

    function __construct()
    {
        parent::__construct();
        return $this;
    }

    /*public function encriptar($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }*/

    public function proceso(){  /*recive desde registrofx */ 

        $datos = (count(func_get_args())>0)?func_get_args()[0]:func_get_args(); 
        $correo = $datos['correo'];
        
        $this->proteger_texto($correo);
        
        $sqlPregunta = "SELECT count(cliente_tienda.ID) AS id FROM cliente_tienda WHERE cliente_tienda.correo = ?;"; /*cuenta si hay o no usuarios con el correo ingresado*/
        $consulta = $this->prepare($sqlPregunta);
        $consulta->bind_param('s', $correo);
        $this->execute($consulta);
        $consulta -> bind_result($resultado);
        $consulta->fetch();
        $consulta->close();

        if($resultado==0){
            
            $guardar = "INSERT INTO cliente_tienda (nombre, apellidos, telefono, correo, contrasena, Foto) VALUES (?,?,?,?,?,?);"; 
            $consulta = $this->prepare($guardar);
            $nombre = $datos['nombre'];
            $apellidos = $datos['apellidos'];
            $telefono = $datos['telefono'];
            $correo = $datos['correo'];
            $pass = $datos['pass'];
            $foto = $datos['foto'];
            $consulta->bind_param('ssssss', $nombre, $apellidos, $telefono, $correo, $pass, $foto);
            $this->execute($consulta);
            $consulta->close();
            
            $rescate = "SELECT MAX(cliente_tienda.ID) as ID FROM cliente_tienda;";
            $nuevaconsulta = $this->prepare($rescate);
            $this->execute($nuevaconsulta);
            $nuevaconsulta->bind_result($ultimo);
            $nuevaconsulta->fetch();
            $nuevaconsulta->close();

            $retorno = array(
                'estado'=> true,
                'mensaje'=> ' Registrado con exito. N° de Registro: ',
                'ultimo' => $ultimo
            );
        }else{
            $retorno = array(
                'estado' => false,
                'mensaje' => ' El usuario ya existe '
            );
        }
        return json_encode($retorno);
    }

    
}

$registrar = new registrar;
?>