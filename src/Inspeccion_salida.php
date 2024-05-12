<?php

namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Inspeccion_salida extends Conexion{
     /**
     * #clase que permite realizar una inspección en una habitación de salida
     */

public $id_hotel;
public $id_habitacion;    
public $puertas;
public $interruptores;
public $mobiliario;
public $griferia;
public $cortinas;
public $paredes;
public $objetos;
public $telefono;

public $television;
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



/**
 * Get the value of id_hotel
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

public function getId_habitacion()
{
return $this->id_habitacion;
}

/**
 * Set the value of id_habitacion
 *
 * @return  self
 */ 
public function setId_habitacion($id_habitacion)
{
$this->id_habitacion = $id_habitacion;

return $this;
}


/**
 * Get the value of puertas
 */ 
public function getPuertas()
{
return $this->puertas;
}

/**
 * Set the value of puertas
 *
 * @return  self
 */ 
public function setPuertas($puertas)
{
$this->puertas = $puertas;

return $this;
}

/**
 * Get the value of interruptores
 */ 
public function getInterruptores()
{
return $this->interruptores;
}

/**
 * Set the value of interruptores
 *
 * @return  self
 */ 
public function setInterruptores($interruptores)
{
$this->interruptores = $interruptores;

return $this;
}

/**
 * Get the value of mobiliario
 */ 
public function getMobiliario()
{
return $this->mobiliario;
}

/**
 * Set the value of mobiliario
 *
 * @return  self
 */ 
public function setMobiliario($mobiliario)
{
$this->mobiliario = $mobiliario;

return $this;
}

/**
 * Get the value of griferia
 */ 
public function getGriferia()
{
return $this->griferia;
}

/**
 * Set the value of griferia
 *
 * @return  self
 */ 
public function setGriferia($griferia)
{
$this->griferia = $griferia;

return $this;
}

/**
 * Get the value of cortinas
 */ 
public function getCortinas()
{
return $this->cortinas;
}

/**
 * Set the value of cortinas
 *
 * @return  self
 */ 
public function setCortinas($cortinas)
{
$this->cortinas = $cortinas;

return $this;
}

/**
 * Get the value of paredes
 */ 
public function getParedes()
{
return $this->paredes;
}

/**
 * Set the value of paredes
 *
 * @return  self
 */ 
public function setParedes($paredes)
{
$this->paredes = $paredes;

return $this;
}

/**
 * Get the value of objectos
 */ 
public function getObjetos()
{
return $this->objetos;
}

/**
 * Set the value of objectos
 *
 * @return  self
 */ 
public function setObjetos($objetos)
{
$this->objetos = $objetos;

return $this;
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

public function getTelefono()
{
return $this->telefono;
}

/**
 * Set the value of telefono
 *
 * @return  self
 */ 
public function setTelefono($telefono)
{
$this->telefono = $telefono;

return $this;
}

/**
 * Get the value of television
 */ 
public function getTelevision()
{
return $this->television;
}

/**
 * Set the value of television
 *
 * @return  self
 */ 
public function setTelevision($television)
{
$this->television = $television;

return $this;
}


public function getSituacion()
{
return $this->situacion;
}

/**
 * Set the value of situacionSalida
 *
 * @return  self
 */ 
public function setSituacion($situacion)
{
$this->situacion = $situacion;

return $this;
}

/**
 * Get the value of fecha
 */ 
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

public function insertar_inspeccion_salida() {
    /**
     * #insertamos en la base de datos los valores para la tabla checklist_salida
     */
    try {
        $sql = "INSERT INTO checklist_salida (id_habitacion, puertas, interruptores, mobiliario, griferia, cortinas, paredes, objetos, telefono, television,
        papeleras, camas, polvo, suelo, toallas, minibar, amenities, olor, usuario, servicio, fecha, id_hotel )        
        VALUES (:id_habitacion, :puertas,  :interruptores, :mobiliario, :griferia, :cortinas, :paredes, :objetos, :telefono, :television,
                :papeleras, :camas, :polvo, :suelo, :toallas, :minibar, :amenities, :olor, :usuario, :servicio, :fecha, :id_hotel
                 )";
        
        $stmt = $this->conexion->prepare($sql);
        
            $stmt->execute([

                ':id_hotel' => $this-> id_hotel,
                ':id_habitacion' => $this->id_habitacion,
                ':puertas' => $this ->puertas,
                ':interruptores' => $this->interruptores,
                ':mobiliario' => $this->mobiliario,
                ':griferia'=> $this->griferia,
                ':cortinas'=> $this->cortinas,
                ':paredes'=> $this->paredes,
                ':objetos'=>$this->objetos,
                ':telefono'=>$this->telefono,
                ':papeleras' => $this->papeleras,
                ':camas' => $this->camas,
                ':polvo'=> $this->polvo,
                ':television'=>$this->television,
                ':suelo'=> $this->suelo,
                ':toallas'=> $this->toallas,
                ':minibar'=>$this->minibar,
                ':amenities' => $this->amenities,
                ':olor' =>$this->olor,
                ':usuario' => $this->usuario,
                ':servicio'=>$this->servicio,             
                ':fecha'=>$this->fecha


                

            ]);
        
    } catch (PDOException $e) {
        die("Error al insertar datos: " . $e->getMessage());
    }
}


public function updateHabitaciones($id_habitacion, $id_hotel){
    /**
     * método que actualiza el estado de la habitación en la tabla habitaciones de la base de datos
     */

    try {
        $sql = "UPDATE habitaciones SET estado = 'revisada', fecha = current_timestamp() WHERE (id_habitacion = :id_habitacion) AND id_hotel = :id_hotel";
            
        $stmt = $this->conexion->prepare($sql);
        
            $stmt->execute([


                ':id_habitacion' => $this->id_habitacion,
                ':id_hotel' => $this -> id_hotel]);
   
    }
    catch (PDOException $ex) {
        die("Error al actualizar estado: " . $ex->getMessage());
}
}

public function updateSalida($id_habitacion, $situacion){
    /**
     * #método que permite actualizar el estado salida de la habitación
     */

    try {
   
        $sql = "UPDATE habitaciones SET salida = :situacion WHERE id_habitacion = :id_habitacion";
        
        // Prepare the SQL statement
        $stmt = $this->conexion->prepare($sql);
        
        // Bind parameters and execute the statement
        $stmt->execute([
            ':id_habitacion' => $id_habitacion, // Use the passed $id_habitacion parameter
            ':situacion' => $situacion // Use the passed $situacion parameter
        ]);
   

    } catch (PDOException $ex) {
        // Handle any errors that occur during the database operation
        die("Error al actualizar estado: " . $ex->getMessage());
    }
}





}


