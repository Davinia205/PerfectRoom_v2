<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
require '../vendor/autoload.php';
use Clases\Conexion;
use Clases\Status;


session_start(); #iniciamos sesión


$conn = new Conexion();
$conn->crearConexion();

// Obtener el ID del registro enviado desde el formulario

if ($_SERVER["REQUEST_METHOD"]== "GET"){
    $id_habitacion = $_GET['id_habitacion'];
    $id_hotel = $_GET['id_hotel'];


    $statusHab = new Status();
    $estadoHabitacion = $statusHab->statusHabitacion($id_hotel, $id_habitacion);

    // Mostrar el resultado de la consulta
    if ($estadoHabitacion !== false) {
        // Mostrar los datos del registro recuperado
       // $registro = $resultado->fetch_assoc();
        echo "Estado: ".$estadoHabitacion;
      
        // Puedes mostrar más campos según tu estructura de tabla
    } else {
        echo "No se encontró ningún registro con el ID proporcionado.";
    }
} else {
    echo "No se proporcionó un ID válido.";
}

$conn->cerrar($conn);