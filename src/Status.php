<?php
#Esta clase sirve para obtener los datos reflejados en status.php
namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Status extends Conexion{

 public $totalHabitaciones;   

public function totalHabitaciones($id_hotel)
{
    $consulta = "SELECT cant_habitaciones FROM hotel WHERE id_hotel = :id_hotel";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener la primera fila como array asociativo
        
        if ($resultado) {
            // Devolver solo el valor de 'cant_habitaciones' si se encontró la fila
            return $resultado['cant_habitaciones'];
        } else {
            // Si no se encontraron resultados, devolver un valor predeterminado o lanzar una excepción
            return 0; // Por ejemplo, devolver 0 si no se encuentra ninguna habitación
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}



 /**
  * Get the value of totalHabitaciones
  */ 
 public function getTotalHabitaciones()
 {
  return $this->totalHabitaciones;
 }

 /**
  * Set the value of totalHabitaciones
  *
  * @return  self
  */ 
 public function setTotalHabitaciones($totalHabitaciones)
 {
  $this->totalHabitaciones = $totalHabitaciones;

  return $this;
 }
}