<?php

namespace Clases;
require '../vendor/autoload.php';

use Clases\Conexion;
use PDO;
use PDOException;

class Status extends Conexion{

function lis()
  {
      $consulta = "select * from jugadores order by nombre";
      $stmt = $this->conProyecto->prepare($consulta);
      try {
          $stmt->execute();
      } catch (PDOException $ex) {
          die("Error al recuperar datos: " . $ex->getMessage());
      }
      return $stmt;
  }
}