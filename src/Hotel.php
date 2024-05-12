<?php

namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Hotel extends Conexion{
    /**
     * clase que permite realizar una inspección en una habitación ocupada
     */

    public $id_hotel;
    public $id_habitacion;
    public $planta;

    




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

    function existeHotel($id_hotel)
    {
        /**
         * método que verifica si existe el id de hotel en la base de datos
         */
        $consulta = "select * from hotel where id_hotel= :ih";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':ih' => $id_hotel    ]);
        } catch (PDOException $ex) {
            die("El código de hotel no es correcto: " . $ex->getMessage());
        }
        if ($stmt->rowCount() > 0) return true;
        return false;
    }

    function existeHabitacion($id_hotel, $id_habitacion, $planta)
    {
        /**
         * método que verifica si los datos de la habitación son correctos
         */
        $consulta = "select * from habitaciones where id_hotel= :ih and id_habitacion= :ihab and planta = :p";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':ih' => $id_hotel,
                'ihab' => $id_habitacion,
                'p' => $planta]);
        } catch (PDOException $ex) {
            die("El código de hotel no es correcto: " . $ex->getMessage());
        }
        if ($stmt->rowCount() > 0) return true;
        return false;
    }



    }
