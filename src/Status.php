<?php

namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Status extends Conexion{
    /**
     * #Esta clase sirve para obtener los datos reflejados en status.php
     */

    


public function totalHabitaciones($id_hotel)
{
    /**
     * método para obtener el total de habitaciones del hotel
     */
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
    /**
     * método para obtener el número de habitaciones que han sido revisadas
     */
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado= 'revisada'";
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
      /**
     * método para obtener el número de habitaciones que no han sido revisadas
     */
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones AS cant_habitaciones WHERE id_hotel = :id_hotel and estado = 'sin revisar'";
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
      /**
     * método para obtener el número de habitaciones de salida que no han sido revisadas
     */
    $consulta = "SELECT count(id_habitacion) AS cant_habitaciones FROM habitaciones WHERE id_hotel = :id_hotel and estado = 'sin revisar' and salida = 'sí'";
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
     /**
     * método para obtener el número de habitaciones de salida que  han sido revisadas
     */
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
     /**
     * método para obtener el número de habitaciones ocupadas que no han sido revisadas
     */
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
     /**
     * método para obtener el número de habitaciones de ocupadas que  han sido revisadas
     */
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
     /**
     * método para obtener el estado de una habitación en concreto
     */
    $consulta = "SELECT estado, fecha FROM habitaciones WHERE id_hotel = :id_hotel AND id_habitacion = :id_habitacion";
    $stmt = $this->conexion->prepare($consulta);
    
    
    try {
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute([
            ':id_hotel' => $id_hotel,
            ':id_habitacion' => $id_habitacion
        ]);
        
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($resultado !== false && isset($resultado['estado'] ) && isset($resultado['fecha'])) {
            return $resultado; // Return the room status
        } else {
            return null; // Room status not found
        }
    } catch (PDOException $ex) {
        // Log the error or handle it appropriately (e.g., throw a custom exception)
        die("Error al recuperar datos: " . $ex->getMessage());
    }
}

function estadoSalida($id_hotel, $id_habitacion)
{
     /**
     * método para confirmar si el estado de la habitación a inspeccionar es de salida
     */
    $consulta = "select * from habitaciones WHERE id_habitacion=:ih AND id_hotel=:i AND salida='sí'";
    $stmt = $this->conexion->prepare($consulta);
    try {
        $stmt->execute([
            ':ih' => $id_habitacion,
            ':i' => $id_hotel

        ]);
    } catch (PDOException $ex) {
        die("Habitación ocupada: " . $ex->getMessage());
    }
    if ($stmt->rowCount() > 0)
        return true;
    return false;
}

function estadoOcupada($id_hotel, $id_habitacion)
{
      /**
     * método para confirmar si el estado de la habitación a inspeccionar es ocupada
     */
    $consulta = "select * from habitaciones WHERE id_habitacion=:ih AND id_hotel=:i AND ocupada='sí'";
    $stmt = $this->conexion->prepare($consulta);
    try {
        $stmt->execute([
            ':ih' => $id_habitacion,
            ':i' => $id_hotel

        ]);
    } catch (PDOException $ex) {
        die("Habitación de salida: " . $ex->getMessage());
    }
    if ($stmt->rowCount() > 0)
        return true;
    return false;
}
}

 
 