<?php

namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Inspeccion_ocupada extends Conexion{
    
    #private $idchecklist;
    public $id_habitacion;
    public $ropa_sucia;
    public $papeleras;
    public $camas;
    public $polvo;
    public $suelo;
    public $servicio;
    public $toallas;
    public $minibar;
    public $amenities;
    public $olor;

    public $usuario;

    
    public function __construct()
    {
        parent::__construct();
    }

    public function getid_habitacion(){
        return $this->id_habitacion;
    }
    public function setid_habitacion($id_habitacion){
        $this->id_habitacion=$id_habitacion;
    }

    public function getropa_sucia(){
        return $this->ropa_sucia;
    }
    public function setropa_sucia($ropa_sucia){
        $this->ropa_sucia=$ropa_sucia;
    }

    public function getpapeleras(){
        return $this->papeleras;
    }
    public function setpapeleras($papeleras){
        $this->papeleras=$papeleras;
    }

    public function getcamas(){
        return $this->camas;
    }
    public function setcamas($camas){
        $this->camas=$camas;
    }

    public function getpolvo(){
        return $this->polvo;
    }
    public function setpolvo($polvo){
        $this->polvo=$polvo;
    }
    public function getsuelo(){
        return $this->id_habitacion;
    }
    public function setsuelo($suelo){
        $this->suelo=$suelo;
    }
    public function getservicio(){
        return $this->servicio;
    }
    public function setservicio($servicio){
        $this->servicio=$servicio;
    }
    public function gettoallas(){
        return $this->toallas;
    }
    public function settoallas($toallas){
        $this->toallas=$toallas;
    }
    public function getminibar(){
        return $this->minibar;
    }
    public function setminibar($minibar){
        $this->minibar=$minibar;
    }
    public function getamenities(){
        return $this->amenities;
    }
    public function setamenities($amenities){
        $this->amenities=$amenities;
    }
    public function getolor(){
        return $this->olor;
    }
    public function setolor($olor){
        $this->olor=$olor;
    }
    public function getusuario(){
        return $this->usuario;
    }
    public function setusuario($usuario){
        $this->usuario=$usuario;
    }


    public function insertar_inspeccion_ocupada() {
        try {
            $sql = "INSERT INTO checklist_ocupada (id_habitacion, ropa_sucia, papeleras, camas, polvo, suelo, toallas, minibar, amenities, olor, usuario, servicio) 
                    VALUES (:id_habitacion, :ropa_sucia, :papeleras, :camas, :polvo, :suelo, :toallas, :minibar, :amenities, :olor, :usuario, :servicio)";
            
            $stmt = $this->conexion->prepare($sql);
            
                $stmt->execute([


                    ':id_habitacion' => $this->id_habitacion,
                    ':ropa_sucia' => $this ->ropa_sucia,
                    ':papeleras' => $this->papeleras,
                    ':camas' => $this->camas,
                    ':polvo'=> $this->polvo,
                    ':suelo'=> $this->suelo,
                    ':toallas'=> $this->toallas,
                    ':minibar'=>$this->minibar,
                    ':amenities' => $this->amenities,
                    ':olor' =>$this->olor,
                    ':usuario' => $this->usuario,
                    ':servicio'=>$this->servicio,

                ]);
            
            echo "Datos insertados correctamente en la tabla checklist_ocupada";
        } catch (PDOException $e) {
            die("Error al insertar datos");
            #die("Error al insertar datos: " . $e->getMessage());
        }
    }

    public function isValido($u)
    {
        $pass1 = hash('sha256', $u);
        $consulta = "select * from usuarios where usuario=:u";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':u' => $u,
            
            ]);
        } catch (PDOException $ex) {
            die("Error al consultar usuario: " . $ex->getMessage());
        }
        if ($stmt->rowCount() == 0) return false;
        return true;
    }

    public function updateHabitaciones($id_habitacion){

        try {
            $sql = "UPDATE habitaciones SET estado = 'ok' WHERE (id_habitacion = :id_habitacion)";
                
            $stmt = $this->conexion->prepare($sql);
            
                $stmt->execute([


                    ':id_habitacion' => $this->id_habitacion]);
        }
        catch (PDOException $ex) {
            die("Error al actualizar estado: " . $ex->getMessage());
    }

}
    
}

    


   


