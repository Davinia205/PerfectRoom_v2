<?php

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

    public function __construct()
    {
        parent::__construct();
    }

    public function gettipo(){
        return $this->tipo;
    }
    public function settipo($tipo){
        $this->idusuarios=$tipo;
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

    public function isValido($u, $p)
    {
        $pass1 = hash('sha256', $p);
        $consulta = "select * from usuarios where usuario=:u AND password=:p";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':u' => $u,
                ':p' => $p
            ]);
        } catch (PDOException $ex) {
            die("Error al consultar usuario: " . $ex->getMessage());
        }
        if ($stmt->rowCount() == 0) return false;
        return true;
    }

    function crearUsuario(){
        $insert = "insert into usuarios() values(:u, :p, :c, :t, :n, :a, :i )";
        $stmt = $this->conexion->prepare($insert);
    
        try{
            $stmt->execute([
                ':u' => $this->username,
                ':p' => $this->password,
                ':c' => $this->cargo,
                ':t' => $this->tipo,
                ':n' => $this -> nombre,
                ':a' => $this-> apellidos,
                ':i' => $this-> id_empleado
                
               
            ]);
              
        } catch (PDOException $ex){
    
        
            die("Ocurrio un error al insertar el usuario:" . $ex->getMessage());
        }
    }

    function existeUsuario($usuario)
        {
            $consulta = "select * from usuarios where usuario=:u";
            $stmt = $this->conexion->prepare($consulta);
                $stmt->execute([
                ':u' => $this-> username
                ]);

                $filas = $stmt->rowCount();
                return ($filas > 0);
               
            }
        }

   


