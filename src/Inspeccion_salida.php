<?php

namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Inspeccion_salida extends Conexion{
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

public function __construct()
{
    parent::__construct();
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





public function insertar_inspeccion_salida() {
    try {
        $sql = "INSERT INTO checklist_salida (id_habitacion, puertas, interruptores, mobiliario, griferia, cortinas, paredes, objetos, telefono, television,
        papeleras, camas, polvo, suelo, toallas, minibar, amenities, olor, usuario, servicio )        
        VALUES (:id_habitacion, :puertas,  :interruptores, :mobiliario, :griferia, :cortinas, :paredes, :objetos, :telefono, :television,
                :papeleras, :camas, :polvo, :suelo, :toallas, :minibar, :amenities, :olor, :usuario, :servicio
                 )";
        
        $stmt = $this->conexion->prepare($sql);
        
            $stmt->execute([


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
                ':servicio'=>$this->servicio
                

            ]);
        
        echo "Datos insertados correctamente en la tabla checklist_salida";
    } catch (PDOException $e) {
        die("Error al insertar datos: " . $e->getMessage());
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


