<?php
#Esta clase sirve para obtener los datos reflejados en status.php
namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Status extends Conexion{

    


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
public function habitacionesok($id_hotel)
{
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado= 'ok'";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Get the first row as an associative array
        
        if ($resultado && isset($resultado['cant_habitaciones'])) {
            return $resultado['cant_habitaciones'];
        } else {
            return 0; // No rooms found or error occurred
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}

public function habitacionesNoOk($id_hotel)
{
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado != 'ok'";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Get the first row as an associative array
        
        if ($resultado && isset($resultado['cant_habitaciones'])) {
            return $resultado['cant_habitaciones'];
        } else {
            return 0; // No rooms found or error occurred
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}

public function habitacionesSalidanoOk($id_hotel)
{
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado != 'ok' and salida = 'sí'";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Get the first row as an associative array
        
        if ($resultado && isset($resultado['cant_habitaciones'])) {
            return $resultado['cant_habitaciones'];
        } else {
            return 0; // No rooms found or error occurred
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}

public function habitacionesSalidaOk($id_hotel)
{
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado = 'ok' and salida = 'sí'";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Get the first row as an associative array
        
        if ($resultado && isset($resultado['cant_habitaciones'])) {
            return $resultado['cant_habitaciones'];
        } else {
            return 0; // No rooms found or error occurred
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}

public function habitacionesOcupadaNoOk($id_hotel)
{
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado != 'ok' and ocupada = 'sí'";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Get the first row as an associative array
        
        if ($resultado && isset($resultado['cant_habitaciones'])) {
            return $resultado['cant_habitaciones'];
        } else {
            return 0; // No rooms found or error occurred
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}


public function habitacionesOcupadaOk($id_hotel)
{
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado = 'ok' and ocupada = 'sí'";
    $stmt = $this->conexion->prepare($consulta);
    
    try {
        $stmt->execute([':id_hotel' => $id_hotel]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); // Get the first row as an associative array
        
        if ($resultado && isset($resultado['cant_habitaciones'])) {
            return $resultado['cant_habitaciones'];
        } else {
            return 0; // No rooms found or error occurred
        }
    } catch (PDOException $ex) {
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}


public function statusHabitacion($id_hotel, $id_habitacion)
{
    $consulta = "SELECT estado FROM habitaciones WHERE id_hotel = :id_hotel AND id_habitacion = :id_habitacion";
    $stmt = $this->conexion->prepare($consulta);
    
    $consulta = "SELECT estado FROM habitaciones WHERE id_hotel = :id_hotel AND id_habitacion = :id_habitacion";
    
    try {
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute([
            ':id_hotel' => $id_hotel,
            ':id_habitacion' => $id_habitacion
        ]);
        
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($resultado !== false && isset($resultado['estado'])) {
            return $resultado['estado']; // Return the room status
        } else {
            return null; // Room status not found
        }
    } catch (PDOException $ex) {
        // Log the error or handle it appropriately (e.g., throw a custom exception)
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}
}

 /**
  * Get the value of totalHabitaciones
  */ 
 