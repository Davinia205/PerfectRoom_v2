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
    public $baño;
    public $toallas;
    public $minibar;
    public $amenities;
    public $olor;

    public $usuario;

    
    public function __construct()
    {
        parent::__construct();
    }

    // public function getId(){
    //     return $this->id;
    // }
    // public function setId($id){
    //     $this->id=$valorId;
    // }

    public function insertar_inspeccion_ocupada() {
        try {
            $sql = "INSERT INTO checklist_ocupada (id_habitacion, ropa_sucia, papeleras, camas, polvo, suelo, baño, toallas, minibar, amenities, olor, usuario) 
                    VALUES (:id_habitacion, :ropa_sucia, :papeleras, :camas, :polvo, :suelo, :baño, :toallas, :minibar, :amenities, :olor, :usuario)";
            
            $stmt = $this->conexion->prepare($sql);
            
            $stmt->bindParam(':id_habitacion', $id_habitacion,PDO::PARAM_INT);
            $stmt->bindParam(':ropa_sucia', $ropa_sucia, PDO::PARAM_INT);
            $stmt->bindParam(':papeleras', $papeleras, PDO::PARAM_INT);
            $stmt->bindParam(':camas', $camas, PDO::PARAM_INT);
            $stmt->bindParam(':polvo', $polvo, PDO::PARAM_INT);
            $stmt->bindParam(':suelo', $suelo, PDO::PARAM_INT);
            $stmt->bindParam(':baño', $baño,PDO::PARAM_INT);
            $stmt->bindParam(':toallas', $toallas, PDO::PARAM_INT);
            $stmt->bindParam(':minibar', $minibar, PDO::PARAM_INT);
            $stmt->bindParam(':amenities', $amenities, PDO::PARAM_INT);
            $stmt->bindParam(':olor', $olor, PDO::PARAM_INT);
            $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            
            $stmt->execute();
            
            echo "Datos insertados correctamente en la tabla checklist_ocupada";
        } catch (PDOException $e) {
            die("Error al insertar datos: " . $e->getMessage());
        }
    }

 
    
}

    


   


