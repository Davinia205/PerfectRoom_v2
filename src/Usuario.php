<?php

namespace Clases;
require '../vendor/autoload.php';
use PDOException;


use Clases\Conexion;


class Usuario extends Conexion
{
    public $username;
    public $password;

    public $idusuarios;

    public $cargo;

    public function __construct()
    {
        parent::__construct();
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

    function crearUsuario($idusuarios, $username, $password, $cargo){
        $insert = "insert into usuarios(idusuarios, usuario, password, cargo) values(:i, :u, :p, :c)";
        $stmt = $this->conexion->prepare($insert);
    
        try{
            $stmt->execute([
                ':i' => $this->idusuarios,
                ':u' => $this->username,
                ':p' => $this->password,
                ':c' => $this->cargo
               
            ]);
              
        } catch (PDOExcepction $ex){
    
        
            die("Ocurrio un error al insertar el jugador:" . $ex->getMessage());
        }
    }
}
