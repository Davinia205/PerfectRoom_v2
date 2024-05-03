<?php
#clase para realizar operaciones relacionadas con usuarios
namespace Clases;
require '../vendor/autoload.php';
use PDOException;


use Clases\Conexion;


class Usuario extends Conexion
{
    public $username;
    public $password;
    
    public $nombre;
    public $apellidos;

    public $id_empleado;
    
    public $tipo;

    public $cargo;

    public $id_hotel;

    public function __construct()
    {
        parent::__construct();
    }
   
    public function gettipo(){
        return $this->tipo;
    }
    public function settipo($tipo){
        $this->tipo=$tipo;
    }
    public function getusername(){
        return $this->username;
    }
    public function setusername($username){
        $this->username=$username;
    }

    public function getpassword(){
        return $this->password;
    }
    public function setpassword($password){
        $this->password=$password;
    }
    public function getcargo(){
        return $this->cargo;
    }
    public function setcargo($cargo){
        $this->cargo=$cargo;
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
    public function getId_empleado()
    {
        return $this->id_empleado;
    }

    /**
     * Set the value of id_empleado
     *
     * @return  self
     */ 
    public function setId_empleado($id_empleado)
    {
        $this->id_empleado = $id_empleado;

        return $this;
    }

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
        if ($stmt->rowCount() == 0) return false;
        return true;
    }

    function crearUsuario(){
        $insert = "insert into usuarios() values(:u, :p, :c, :t, :n, :a, :i, :ih )";
        $stmt = $this->conexion->prepare($insert);
    
        try{
            $stmt->execute([
                ':u' => $this->username,
                ':p' => $this->password,
                ':c' => $this->cargo,
                ':t' => $this->tipo,
                ':n' => $this -> nombre,
                ':a' => $this-> apellidos,
                ':i' => $this-> id_empleado,
                ':ih' => $this-> id_hotel
                
               
            ]);
              
        } catch (PDOException $ex){
    
        
            die("Ocurrio un error al insertar el usuario:" . $ex->getMessage());
        }
    }




    function existeUsuario($usuario)
    {
        $consulta = "select * from usuarios where usuario=:u";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':u' => $usuario
                
            ]);
        } catch (PDOException $ex) {
            die("Error al consultar usuario: " . $ex->getMessage());
        }
        if ($stmt->rowCount() == 0) return false;
        return true;
    }
               
        function existeHotel($id_hotel)
        {
            $consulta = "select * from hotel where id_hotel= :ih";
            $stmt = $this->conexion->prepare($consulta);
            try {
                $stmt->execute([
                    ':ih' => $id_hotel    ]);
            } catch (PDOException $ex) {
                die("El código de hotel no es correcto: " . $ex->getMessage());
            }
            if ($stmt->rowCount() == 0) return false;
            return true;
        }
        function existeIdEmpleado($id_empleado)
        {
            $consulta = "select * from usuarios where id_empleado= :ie";
            $stmt = $this->conexion->prepare($consulta);
            try {
                $stmt->execute([
                    ':ie' => $id_empleado   ]);
            } catch (PDOException $ex) {
                die("El código de empleado no es correcto: " . $ex->getMessage());
            }
            if ($stmt->rowCount() > 0) return false;
            return true;
        }

        function TipoUsuario($usuario)
        {
            $consulta = "select tipo from usuarios where usuario=:u";
            $stmt = $this->conexion->prepare($consulta);
            try {
                $stmt->execute([
                    ':u' => $usuario    ]);
            } catch (PDOException $ex) {
                die("El usuario ya existe: " . $ex->getMessage());
            }
            if ($stmt = 'Usuario Limpieza') return false;
            return true;
        }
            }
        

   


