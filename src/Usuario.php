<?php
namespace Clases;

require '../vendor/autoload.php';
use PDOException;
use PDO;


use Clases\Conexion;


class Usuario extends Conexion
{
    /** 
     *clase para realizar operaciones relacionadas con usuarios
    */
    public $usuario;
    public $password;

    public $nombre;
    public $apellidos;

    public $tipo;

    public $cargo;

    public $id_hotel;

    public function __construct()
    {
        parent::__construct();
    }

    public function gettipo()
    {
        return $this->tipo;
    }
    public function settipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getusuario()
    {
        return $this->usuario;
    }
    public function setusuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($password)
    {
        $this->password = $password;
    }
    public function getcargo()
    {
        return $this->cargo;
    }
    public function setcargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of id_empleado
     */


    public function getId_hotel()
    {
        return $this->id_hotel;
    }

    /**
     * Set the value of id_hotel
     *
     * @return  self
     */
    public function setId_hotel($id_hotel)
    {
        $this->id_hotel = $id_hotel;

        return $this;
    }

    public function isValido($u, $p, $ih)
    {
        /**
         * método para confirmar que las claves introducidas son correctas
         */
        $pass1 = hash('sha256', $p);
        $consulta = "select * from usuarios where usuario=:u AND password=:p AND id_hotel=:ih";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':u' => $u,
                ':p' => $p,
                ':ih' => $ih
            ]);
        } catch (PDOException $ex) {
            die("Error al consultar usuario: " . $ex->getMessage());
        }
        if ($stmt->rowCount() == 0)
            return false;
        return true;
    }

    function crearUsuario()
    {
        /**
         * método para insertar un usuario en la base de datos
         */
        $insert = "insert into usuarios values(:u, :p, :c, :t, :n, :a, :ih )";
        $stmt = $this->conexion->prepare($insert);

        try {
            $stmt->execute([
                ':u' => $this->usuario,
                ':p' => $this->password,
                ':c' => $this->cargo,
                ':t' => $this->tipo,
                ':n' => $this->nombre,
                ':a' => $this->apellidos,
                ':ih' => $this->id_hotel


            ]);

        } catch (PDOException $ex) {


            die("Ocurrio un error al insertar el usuario:" . $ex->getMessage());
        }
    }




    function existeUsuario($new_Usuario, $id_hotel)
    {
        /**
         * método para comprobar si existe un usuario
         */
        $consulta = "select * from usuarios where usuario=:u and id_hotel=:i";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':u' => $new_Usuario,
                ':i' => $id_hotel

            ]);
        } catch (PDOException $ex) {
            die("Error al consultar usuario: " . $ex->getMessage());
        }
        if ($stmt->rowCount() > 0)
            return true;
        return false;
    }

    public function tipoUsuario($usuario)
    {
        /**
         * método para verificar si un usuario es Administrador
         */
        $consulta = "SELECT * FROM usuarios WHERE usuario= :u AND tipo= 'Administrador'";
        $stmt = $this->conexion->prepare($consulta);


        try {
            $stmt = $this->conexion->prepare($consulta);
            $stmt->execute([
                ':u' => $usuario
      
                

            ]);
         
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                return true; // devolver el estado
            } else {
                 return false; // estado no encontrado
             }
        } catch (PDOException $ex) {
            // Log del error
            die("Error al recuperar datos: " . $ex->getMessage());
        }
    }

}





