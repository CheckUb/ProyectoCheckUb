<?php require 'ConexionCs.php';
class acceso extends conexion
{

    function __construct()
    {
        parent::__construct();
        return $this;
    }

    public function logear()
    {
        $data = (count(func_get_args()) > 0) ? func_get_args()[0] : func_get_args();
        $correo = $data['correo'];
        $sqlVer = "SELECT count(cliente_tienda.ID) AS id FROM cliente_tienda WHERE cliente_tienda.correo = ?;";
        $consulta = $this->prepare($sqlVer);
        $consulta->bind_param('s', $correo);
        $this->execute($consulta);
        $consulta->bind_result($verificador);
        $consulta->fetch();
        $consulta->close();

        if ($verificador == 1) {

            $inyeccion = "SELECT cliente_tienda.ID, cliente_tienda.nombre, cliente_tienda.apellidos, cliente_tienda.telefono, cliente_tienda.correo, cliente_tienda.contrasena, cliente_tienda.Foto FROM cliente_tienda WHERE Correo = ?;";
            $consulta = $this->prepare($inyeccion);
            $pass = $data['pass'];
            $consulta->bind_param('s', $correo);
            $this->execute($consulta);
            $consulta->bind_result($ID, $nombre, $apellidos, $telefono, $correo , $passHash, $Foto);
            $consulta->fetch();
            $consulta->close();

            if (password_verify($pass, $passHash)) {
                $cliente_tienda = array(
                    'estado' => true,
                    'Registro' => $ID,
                    'Nombre' => $nombre,
                    'Apellido' => $apellidos,
                    'Telefono' => $telefono,
                    'Correo' => $correo,
                    'Contrasena' => $passHash,
                    'Foto' => $Foto
                );
            } else {
                $cliente_tienda = array(
                    'estado' => false,
                    'mensaje' => 'Correo no existe o Claves no coinciden'
                );
            }
        } else {
            $cliente_tienda = array(
                'estado' => false,
                'mensaje' => 'Correo no existe o Clave no coincide'
            );
        }
        return json_encode($cliente_tienda);
    }
}
$acceso = new acceso();
