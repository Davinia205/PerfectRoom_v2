<?php
#clase que permite realizar una inspección en una habitación ocupada
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

    public $situacion;

    public $fecha;

    
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
    public function getSituacion()
    {
        return $this->situacion;
    }

    /**
     * Set the value of situacion
     *
     * @return  self
     */ 
    public function setSituacion($situacion)
    {
        $this->situacion = $situacion;

        return $this;
    }

    
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
    #insertamos en la base de datos los valores para la tabla checklist_ocupada
    public function insertar_inspeccion_ocupada() {
        try {
            $sql = "INSERT INTO checklist_ocupada (id_habitacion, ropa_sucia, papeleras, camas, polvo, suelo, toallas, minibar, amenities, olor, usuario, servicio, fecha) 
                    VALUES (:id_habitacion, :ropa_sucia, :papeleras, :camas, :polvo, :suelo, :toallas, :minibar, :amenities, :olor, :usuario, :servicio, :fecha)";
            
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
                    ':fecha' => $this ->fecha

                ]);
            
            echo "Datos insertados correctamente en la tabla checklist_ocupada";
        } catch (PDOException $e) {
            die("Error al insertar datos");
            #die("Error al insertar datos: " . $e->getMessage());
        }
    }
  # se va a eliminar, ya existe en la clase usuario
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
    #método que permite actualizar el estado de la habitación una vez realizada la inspección
    public function updateHabitaciones($id_habitacion){

        try {
            $sql = "UPDATE habitaciones SET estado = 'ok' WHERE (id_habitacion = :id_habitacion)";
                
            $stmt = $this->conexion->prepare($sql);
            
                $stmt->execute([


                    ':id_habitacion' => $this->id_habitacion]);
                    echo "Actualización realizada correctamente";
        }
        catch (PDOException $ex) {
            die("Error al actualizar estado: " . $ex->getMessage());
    }

}
#método que permite actualizar el estado ocupada de la habitación una vez realizada la inspección    
public function updateOcupada($id_habitacion, $situacion){

    try {
        // Prepare the SQL query with placeholders
        $sql = "UPDATE habitaciones SET ocupada = :situacion WHERE id_habitacion = :id_habitacion";
        
        // Prepare the SQL statement
        $stmt = $this->conexion->prepare($sql);
        
        // Bind parameters and execute the statement
        $stmt->execute([
            ':id_habitacion' => $id_habitacion, // Use the passed $id_habitacion parameter
            ':situacion' => $situacion // Use the passed $situacion parameter
        ]);
        echo "<br></br>Actualización estado Ocupada realizada correctamente<br></br>";
      
    } catch (PDOException $ex) {
        // Handle any errors that occur during the database operation
        die("Error al actualizar estado: " . $ex->getMessage());
    }
}

   
}
    


   


