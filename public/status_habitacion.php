<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
require '../vendor/autoload.php';
use Clases\Conexion;
use Clases\Status;
use Clases\Usuario;
use Clases\Hotel;

session_start(); #iniciamos sesión

$usuario = $_SESSION['usuario'];


$conn = new Conexion();
$conn->crearConexion();

// Obtener el ID del registro enviado desde el formulario

if ($_SERVER["REQUEST_METHOD"]== "GET"){
    $id_habitacion = $_GET['id_habitacion'];
    $id_hotel = $_GET['id_hotel'];
    $planta = $_GET['planta'];

    

    $statusHab = new Status();
    $usu = new Usuario();
    $hab = new Hotel();
    if (($usu -> existeUsuario($usuario, $id_hotel) && $hot -> existeHabitacion($id_habitacion, $id_hotel, $planta))){
    $estadoHabitacion = $statusHab->statusHabitacion($id_hotel, $id_habitacion);
    
    //var_dump($estadoHabitacion); utilizado para pruebas
    
    // Mostrar el resultado de la consulta
    if ($estadoHabitacion !== false  ) {
        // Mostrar los datos del registro recuperado

        echo "Estado: ".$estadoHabitacion['estado'];
        echo "<br></br>";
        echo "Fecha y Hora Inspección: ".$estadoHabitacion['fecha'];      
 
    } else {
        echo "No se encontró ningún registro con el ID proporcionado.";
    }
 } else {
     echo "No se proporcionó un ID válido.";
}
}
